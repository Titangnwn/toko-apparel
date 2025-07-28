<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProdukResource\Pages;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class ProdukResource extends Resource
{
   protected static ?string $model = Product::class;



    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Produk';
    protected static ?string $pluralModelLabel = 'Produk';
    protected static ?string $navigationGroup = 'Manajemen Toko';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('nama')
                ->label('Nama Produk')
                ->required()
                ->maxLength(255),

            Forms\Components\Textarea::make('deskripsi')
                ->label('Deskripsi'),

            Forms\Components\FileUpload::make('gambar')
                ->label('Gambar')
                ->image()
                ->directory('produk-gambar') // folder di storage/app/public
                ->disk('public') // agar bisa diakses via storage link
                ->preserveFilenames()
                ->imagePreviewHeight('150')
                ->required(),

            Forms\Components\TextInput::make('harga')
                ->label('Harga')
                ->numeric()
                ->required()
                ->prefix('Rp'),

            Forms\Components\TextInput::make('stok')
                ->label('Stok')
                ->numeric()
                ->required(),
        ]);
    }

   public static function getModel(): string
{
    return Product::class;
}



    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('nama')->searchable()->sortable(),

            Tables\Columns\ImageColumn::make('gambar')
                ->label('Foto')
                ->disk('public') // penting agar tahu gambar dari /storage
                ->url(fn ($record) => asset('storage/' . $record->gambar))
                ->height(60)
                ->width(60)
                ->circular(),

            Tables\Columns\TextColumn::make('harga')->money('IDR')->sortable(),
            Tables\Columns\TextColumn::make('stok')->sortable(),
            Tables\Columns\TextColumn::make('created_at')->label('Tanggal Input')->dateTime('d M Y'),
        ])
        ->filters([])
        ->actions([
            Tables\Actions\ViewAction::make(),
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
        ])
        ->bulkActions([
            Tables\Actions\BulkActionGroup::make([
                Tables\Actions\DeleteBulkAction::make(),
            ]),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProduks::route('/'),
            'create' => Pages\CreateProduk::route('/create'),
            'edit' => Pages\EditProduk::route('/{record}/edit'),
        ];
    }
}
