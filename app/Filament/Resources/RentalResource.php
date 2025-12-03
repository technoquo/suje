<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RentalResource\Pages;
use App\Models\Rental;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class RentalResource extends Resource
{
    protected static ?string $model = Rental::class;

    protected static ?string $navigationLabel = "Locations";
    protected static ?string $label = "Location";
    protected static ?string $navigationGroup = 'Locations';
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name')
                    ->label('Utilisateur')
                    ->required(),

                Forms\Components\Select::make('product_id')
                    ->relationship('product', 'name')
                    ->label('Produit')
                    ->required(),

                Forms\Components\DatePicker::make('date_debut')
                    ->label('Date de début')
                    ->required(),

                Forms\Components\DatePicker::make('date_fin')
                    ->label('Date de fin')
                    ->required(),

                Forms\Components\DatePicker::make('return_date')
                    ->label('Date de retour'),

                TextInput::make('prix_total')
                    ->numeric()
                    ->label('Prix total')
                    ->required(),

                TextInput::make('penalite')
                    ->numeric()
                    ->label('Pénalité')
                    ->default(0)
                    ->nullable(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Utilisateur'),

                Tables\Columns\TextColumn::make('product.name')
                    ->label('Produit'),

                Tables\Columns\TextColumn::make('date_debut')
                    ->date()
                    ->label('Date de début'),

                Tables\Columns\TextColumn::make('date_fin')
                    ->date()
                    ->label('Date de fin'),

                Tables\Columns\TextColumn::make('order.status')
                    ->label('Statut de commande')
                    ->formatStateUsing(function ($state) {
                        return match($state) {
                            'pending'  => 'En attente',
                            'activo'   => 'Actif',
                            'devuelto' => 'Retourné',
                            default    => ucfirst($state),
                        };
                    }),

                Tables\Columns\TextColumn::make('prix_total')
                    ->label('Prix total'),

                Tables\Columns\TextColumn::make('penalite')
                    ->label('Pénalité'),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListRentals::route('/'),
            'create' => Pages\CreateRental::route('/create'),
            'edit'   => Pages\EditRental::route('/{record}/edit'),
        ];
    }
}
