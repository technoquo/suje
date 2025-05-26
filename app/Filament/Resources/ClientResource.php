<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ClientResource\Pages;
use App\Filament\Resources\ClientResource\RelationManagers;
use App\Models\Client;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ClientResource extends Resource
{
    protected static ?string $model = Client::class;

    protected static ?string $navigationLabel = "Soutiens";
    protected static ?string $label = "Soutiens";
    protected static ?string $navigationGroup = 'Organisation';
    protected static ?int $navigationSort = 7;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Nom du client')
                    ->required(),
                Forms\Components\FileUpload::make('image')
                    ->label('Logo du client')
                    ->image()
                    ->required(),
                Forms\Components\TextInput::make('url')
                    ->label('URL du client')
                    ->required(),
                Forms\Components\Toggle::make('status')
                    ->label('Statut')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nom du client')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image')
                   ->label('Logo du client')
                    ->circular()
                    ->size(50),
                Tables\Columns\TextColumn::make('url')
                    ->label('URL du client')
                    ->searchable(),
                Tables\Columns\IconColumn::make('status')
                    ->label('Statut')
                    ->boolean(),

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
            'index' => Pages\ListClients::route('/'),
            'create' => Pages\CreateClient::route('/create'),
            'edit' => Pages\EditClient::route('/{record}/edit'),
        ];
    }
}
