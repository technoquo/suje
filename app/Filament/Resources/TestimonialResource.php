<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TestimonialResource\Pages;
use App\Filament\Resources\TestimonialResource\RelationManagers;
use App\Models\Testimonial;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TestimonialResource extends Resource
{
    protected static ?string $model = Testimonial::class;

    protected static ?string $navigationLabel = "Mérites";
    protected static ?string $label = "Mérites";
    protected static ?string $navigationGroup = 'Organisation';
    protected static ?int $navigationSort = 5;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('full_name')
                    ->label('Nom et prénom')
                    ->required(),
                Forms\Components\TextInput::make('position')
                    ->label('Poste'),
                Forms\Components\FileUpload::make('image')
                    ->label('Image')
                    ->image(),
                Forms\Components\Textarea::make('testimony')
                    ->label('Témoignage')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Toggle::make('status')
                    ->label('Statut')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('full_name')
                    ->label('Nom et prénom')
                    ->searchable(),
                Tables\Columns\TextColumn::make('position')
                    ->label('Poste')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image')
                        ->label('Image')
                        ->circular(),
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
            'index' => Pages\ListTestimonials::route('/'),
            'create' => Pages\CreateTestimonial::route('/create'),
            'edit' => Pages\EditTestimonial::route('/{record}/edit'),
        ];
    }
}
