<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeamResource\Pages;
use App\Filament\Resources\TeamResource\RelationManagers;
use App\Models\Team;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TeamResource extends Resource
{
    protected static ?string $model = Team::class;

    protected static ?string $navigationLabel = "L'Équipe";
    protected static ?string $label = "L'Équipe";
    protected static ?string $navigationGroup = 'Organisation';
    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('full_name')
                    ->label('Full Name') // Translated from 'Nom complet'
                    ->required(),
                Forms\Components\TextInput::make('position')
                    ->label('Position') // Already in English, kept as is
                    ->required(),
                Forms\Components\TextInput::make('email')
                    ->label('Email') // Already in English, kept as is
                    ->email()
                    ->required()
                    ->rules([
                        'unique:teams,email,' . ($form->getRecord()?->id ?? 'NULL'), // Ignore the current record's ID
                    ])
                    ->validationMessages([
                        'unique' => 'Cet e-mail est déjà utilisé.',
                    ]),
                Forms\Components\FileUpload::make('image')
                    ->label('Image') // Already in English, kept as is
                    ->image(),
                Forms\Components\TextInput::make('facebook')
                    ->label('Facebook') // Already in English, kept as is
                    ->prefixIcon('heroicon-o-link'),
                Forms\Components\TextInput::make('twitter')
                    ->label('Twitter') // Already in English, kept as is
                    ->prefixIcon('heroicon-o-link'),
                Forms\Components\TextInput::make('linkedin')
                    ->label('LinkedIn') // Already in English, kept as is
                    ->prefixIcon('heroicon-o-link'),
                Forms\Components\Toggle::make('active')
                    ->label('Active') // Translated from 'Actif'
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('full_name')
                    ->label('Nom complet')
                    ->searchable(),
                Tables\Columns\TextColumn::make('position')
                    ->label('Position')
                    ->searchable(),
                Tables\Columns\IconColumn::make('active')
                    ->label('Actif')
                    ->boolean()
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-x-circle')
                    ->sortable(),
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
            'index' => Pages\ListTeams::route('/'),
            'create' => Pages\CreateTeam::route('/create'),
            'edit' => Pages\EditTeam::route('/{record}/edit'),
        ];
    }
}
