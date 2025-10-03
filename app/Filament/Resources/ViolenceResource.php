<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ViolenceResource\Pages;
use App\Filament\Resources\ViolenceResource\RelationManagers;
use App\Models\Violence;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ViolenceResource extends Resource
{
    protected static ?string $model = Violence::class;

    protected static ?string $navigationLabel = "Violences";
    protected static ?string $label = "Violences";
    protected static ?string $navigationGroup = 'Organisation';
    protected static ?int $navigationSort = 9;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('code_vimeo')
                    ->maxLength(255),
                Forms\Components\Toggle::make('status')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('code_vimeo')
                    ->searchable(),
                Tables\Columns\IconColumn::make('status')
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
            'index' => Pages\ListViolences::route('/'),
            'create' => Pages\CreateViolence::route('/create'),
            'edit' => Pages\EditViolence::route('/{record}/edit'),
        ];
    }
}
