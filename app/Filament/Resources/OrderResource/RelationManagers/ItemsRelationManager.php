<?php

namespace App\Filament\Resources\OrderResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ItemsRelationManager extends RelationManager
{
    protected static string $relationship = 'items';

//    public function form(Form $form): Form
//    {
//        return $form
//            ->schema([
//                Forms\Components\TextInput::make('fullname')
//                    ->required()
//                    ->maxLength(255),
//            ]);
//    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Produit'),
                TextColumn::make('quantity')->label('Quantité'),
                TextColumn::make('price')->label('Prix / jour'),
                TextColumn::make('days')->label('Jours'),
                TextColumn::make('total_price')->label('Total (€)'),
                TextColumn::make('penalty')
                    ->label('Pénalité (€)')
                    ->formatStateUsing(fn ($state) =>
                    $state > 0 ? number_format($state, 2, ',', ' ') . ' €' : '-'
                    ),
                TextColumn::make('date_debut')->label('Début'),
                TextColumn::make('date_fin')->label('Fin'),
                TextColumn::make('return_date')->label('Retourné le'),
            ])
            ->actions([
                // 👇👇 TU ACCIÓN AQUÍ 👇👇
                Tables\Actions\Action::make('markReturned')
                    ->label('Marquer comme retourné')
                    ->color('success')
                    ->visible(fn ($record) => ! $record->is_returned) // solo si NO devuelto
                    ->requiresConfirmation()
                    ->action(function ($record) {

                        $today = now();
                        $end = \Carbon\Carbon::parse($record->date_fin);

                        $delay = $end->diffInDays($today, false);

                        // multa solo si devuelve tarde
                        $penalty = $delay < 0 ? abs($delay) * 5 : 0;

                        $record->update([
                            'is_returned' => true,
                            'return_date' => $today,
                            'penalty'     => $penalty,
                        ]);

                        // actualizar total de la orden
                        $order = $record->order;
                        $order->total = $order->items()->sum('total_price') + $order->items()->sum('penalty');
                        $order->save();
                    }),
            ]);
    }
}
