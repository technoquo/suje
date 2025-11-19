<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderResource\Pages;
use App\Filament\Resources\OrderResource\RelationManagers\ItemsRelationManager;
use App\Models\Order;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';
    protected static ?string $navigationLabel = 'Orders';
    protected static ?string $pluralLabel = 'Orders';

    // --------- FORMULARIO (solo editar estado) ----------
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('fullname')->disabled(),
                TextInput::make('email')->disabled(),
                Textarea::make('address')->label('Address')->disabled(),

                TextInput::make('total')->disabled(),

                Select::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'paid' => 'Paid',
                        'cancelled' => 'Cancelled',
                    ])
                    ->required(),
            ]);
    }

    // --------- TABLA PRINCIPAL DE ORDENES ----------
    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('id')->sortable(),

                TextColumn::make('fullname')
                    ->label('Client')
                    ->searchable(),

                TextColumn::make('email'),

                TextColumn::make('total')
                    ->money('EUR'),

                BadgeColumn::make('status')
                    ->colors([
                        'warning' => 'pending',
                        'success' => 'paid',
                        'danger' => 'cancelled',
                    ])
                    ->label('Status'),
                BadgeColumn::make('is_late')
                    ->label('Retard')
                    ->colors([
                        'danger' => fn ($record) => $record->is_late,   // si está atrasada la orden
                        'success' => fn ($record) => !$record->is_late,
                    ])
                    ->formatStateUsing(fn ($state) =>
                    $state ? 'Atrasado' : 'À jour'
                    ),
                TextColumn::make('created_at')
                    ->label('Date')
                    ->dateTime(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ]);
    }

    // --------- RELATION MANAGER PARA ITEMS ----------
    public static function getRelations(): array
    {
        return [
            ItemsRelationManager::class,
        ];
    }

    // --------- PÁGINAS ----------
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOrders::route('/'),
            'create' => Pages\CreateOrder::route('/create'),
            'edit' => Pages\EditOrder::route('/{record}/edit'),

        ];
    }
}
