<?php

namespace App\Filament\Resources\OrderResource\RelationManagers;

use App\Mail\RentalPenaltyMail;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Mail;
use App\Mail\RentalThanksMail;


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
                TextColumn::make('date_debut')->label('Début')->date('d/m/Y'),
                TextColumn::make('date_fin')->label('Fin')->date('d/m/Y'),
                TextColumn::make('return_date')->label('Retourné le'),
            ])
            ->actions([
                // 👇👇 TU ACCIÓN AQUÍ 👇👇
                Tables\Actions\Action::make('markReturned')
                    ->label('Marquer comme retourné')
                    ->color('success')
                    ->visible(fn ($record) => ! $record->is_returned)
                    ->requiresConfirmation()
                    ->action(function ($record) {

                        $today = now()->startOfDay(); // hoy
                        $end   = \Carbon\Carbon::parse($record->date_fin)->startOfDay(); // fecha fin

                        // 🔍 Días de retraso SOLO si devuelve después de la fecha fin
                        if ($today->greaterThan($end)) {
                            $delay   = $end->diffInDays($today); // siempre número positivo
                            $penalty = $delay * 5; // 5 € por día, ajusta si quieres
                        } else {
                            $delay   = 0;
                            $penalty = 0;
                        }

                        $record->update([
                            'is_returned' => true,
                            'return_date' => $today,
                            'penalty'     => $penalty,
                        ]);

                        // 🔄 sumar stock devuelto
                        if ($record->product && $record->quantity > 0) {
                            $record->product->increment('stock', $record->quantity);
                        }

                        // 🧮 actualizar total de la orden
                        $order        = $record->order;
                        $order->total = $order->items()->sum('total_price') + $order->items()->sum('penalty');
                        $order->save();

                        // 📩 Enviar el email correcto
                        if ($penalty <= 0) {
                            // ✅ Sin penalidad (agradecimiento)
                            Mail::to($order->email)
                                ->bcc(env('SALES_EMAIL'))
                                ->send(new \App\Mail\RentalThanksMail($record));
                        } else {
                            // ⚠ Con penalidad (aviso)
                            Mail::to($order->email)
                                ->bcc(env('SALES_EMAIL'))
                                ->send(new \App\Mail\RentalPenaltyMail($record));
                        }
                    }),

            ]);
    }
}
