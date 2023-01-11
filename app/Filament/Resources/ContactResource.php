<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Contact;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ContactResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ContactResource\RelationManagers;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static ?string $navigationIcon = 'heroicon-o-at-symbol';
    protected static ?string $navigationGroup = 'إدارة الإيميلات';
    protected static ?string $navigationLabel = 'الإيميلات';


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable()->label('رقم العملية'),
                TextColumn::make('name')->label('الأسم')->sortable()->searchable(),
                TextColumn::make('email')->label('الإيميل')->sortable(),
                TextColumn::make('mobile')->label('الهاتف')->sortable(),
                TextColumn::make('title')->label('الموضوع')->sortable(),
                TextColumn::make('message')->label('الرسالة')->sortable(),
                TextColumn::make('created_at')->label('تاريخ الارسال')->dateTime()
            ])
            ->filters([
                //
            ])
            ->actions([

                ])
            ->bulkActions([

            ]);
    }
    
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListContacts::route('/'),
        ];
    }    
}
