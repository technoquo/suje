<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SocialNetworkResource\Pages;
use App\Filament\Resources\SocialNetworkResource\RelationManagers;
use App\Models\SocialNetwork;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SocialNetworkResource extends Resource
{
    protected static ?string $model = SocialNetwork::class;

    protected static ?string $navigationLabel = 'Médias Sociaux';
    protected static ?string $label = 'Médias Sociaux';
    protected static ?string $navigationGroup = 'Organisation';
    protected static ?int $navigationSort = 8;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('platform')
                    ->label('Nom du réseau social')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('url')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('icon')
                    ->label('Icône des réseaux sociaux')
                    ->required()
                    ->maxLength(255)
                    ->helperText('Icône de réseau social, vous pouvez utiliser Lucide "https://lucide.dev/" .'),
                Forms\Components\Toggle::make('status')
                    ->label('Statut')
                    ->default(1)
                    ->inline()
                    ->helperText('Activer ou désactiver le réseau social'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('platform')
                    ->label('Nom du réseau social')
                    ->searchable(),
                Tables\Columns\TextColumn::make('url')
                    ->searchable(),
                Tables\Columns\IconColumn::make('status')
                    ->label('Statut')
                    ->boolean()
                    ->sortable()
                    ->toggleable(),

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
            'index' => Pages\ListSocialNetworks::route('/'),
            'create' => Pages\CreateSocialNetwork::route('/create'),
            'edit' => Pages\EditSocialNetwork::route('/{record}/edit'),
        ];
    }
}
