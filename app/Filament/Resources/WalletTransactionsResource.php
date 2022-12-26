<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WalletTransactionsResource\Pages;
use App\Filament\Resources\WalletTransactionsResource\RelationManagers;
use App\Models\WalletTransactions;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use MannikJ\Laravel\Wallet\Models\Transaction;

class WalletTransactionsResource extends Resource
{
    protected static ?string $model = Transaction::class;

    protected static ?string $navigationIcon = 'heroicon-o-credit-card';
    protected static ?string $navigationGroup = 'إدارة العمليات';
    protected static ?string $navigationLabel = 'عرض جميع العمليات';

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make("id")->label('رقم العملية'),
                TextColumn::make("amount")->label('المبلغ'),
                TextColumn::make("type")->label('نوع العملية'),
                TextColumn::make("wallet.owner.name")->label('أسم المودع'),
                TextColumn::make("created_at")->date()->label('إنشاء بتاريخ'),
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
            'index' => Pages\ListWalletTransactions::route('/'),
        ];
    }    
}
