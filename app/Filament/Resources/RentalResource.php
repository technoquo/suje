<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RentalResource\Pages;
use App\Filament\Resources\RentalResource\RelationManagers;
use App\Models\Rental;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RentalResource extends Resource
{
    protected static ?string $model = Rental::class;

    protected static ?string $navigationLabel = "Locations";
    protected static ?string $label = "location";
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

                Forms\Components\DatePicker::make('start_date')
                    ->label('Date de début')
                    ->required(),

                Forms\Components\DatePicker::make('end_date')
                    ->label('Date de fin')
                    ->required(),

                Forms\Components\DatePicker::make('return_date')
                    ->label('Date de retour'),

                Forms\Components\TextInput::make('total_price')
                    ->numeric()
                    ->label('Prix total')
                    ->required(),

                Forms\Components\Select::make('status')
                    ->label('Statut')
                    ->options([
                        'pendiente' => 'En attente',
                        'activo' => 'Actif',
                        'devuelto' => 'Retourné',
                        'con_multa' => 'Avec pénalité',
                    ])
                    ->required(),

                Forms\Components\TextInput::make('penalty')
                    ->numeric()
                    ->label('Pénalité'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')->label('Utilisateur'),
                Tables\Columns\TextColumn::make('product.name')->label('Produit'),
                Tables\Columns\TextColumn::make('start_date')->date()->label('Date de début'),
                Tables\Columns\TextColumn::make('end_date')->date()->label('Date de fin'),
                Tables\Columns\TextColumn::make('status')->label('Statut'),
                Tables\Columns\TextColumn::make('total_price')->label('Prix total'),
                Tables\Columns\TextColumn::make('penalty')->label('Pénalité'),
            ])
            ->filters([
                //
            ])
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
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRentals::route('/'),
            'create' => Pages\CreateRental::route('/create'),
            'edit' => Pages\EditRental::route('/{record}/edit'),
        ];
    }
}
