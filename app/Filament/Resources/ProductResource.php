<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Product;
use Illuminate\Support\Str;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Livewire\TemporaryUploadedFile;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ProductResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProductResource\RelationManagers;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-check';
    protected static ?string $navigationGroup = 'إدارة المنتجات';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
        ->schema([
            TextInput::make('name')
            ->label('أسم المنتج:')
            ->required()
            ->maxLength(255),
            FileUpload::make('image')
            ->label('إختر صورة:')
            ->required()
            ->multiple()
            ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file): string {
                return "images/products/".Str::random(15).".".$file->getClientOriginalExtension();
            }),
            Textarea::make('disc')->label('الوصف:')->required(),
            TextInput::make('price')
            ->label('السعر:')
            ->required()
            ->integer(),
            Select::make('category_id')
            ->label('إختر القسم:')
            ->relationship('category', 'name')->required()

        ])
            
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->label('رقم المنتج')-> sortable(),
                TextColumn::make('name')->label('أسم المنتج')-> searchable(),
                TextColumn::make('disc')->label('الوصف')->limit(1000000),
                TextColumn::make('price')->label('السعر')->money('YER'),
                TextColumn::make('category.name')->label('القسم') -> sortable(),
                TextColumn::make('created_at')->dateTime()
            ])
            ->filters([
                SelectFilter::make('category')->relationship('category', 'name')
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }    
}
