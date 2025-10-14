<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CalendarResource\Pages;
use App\Filament\Resources\CalendarResource\RelationManagers;
use App\Models\Calendar;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CalendarResource extends Resource
{
    protected static ?string $model = Calendar::class;

    protected static ?string $navigationLabel = "Calendrier sportif";
    protected static ?string $label = "Calendrier sportif";
    protected static ?string $navigationGroup = 'Sports';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('image')
                    ->image(),
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->maxLength(255)
                    ->live(onBlur: true) // Updates the slug as you type or on blur
                    ->afterStateUpdated(function (callable $set, $state) {
                        $set('slug', \Illuminate\Support\Str::slug($state));
                    }),
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\DateTimePicker::make('date_published')
                    ->required(),
                Forms\Components\TextInput::make('whatsapp')
                    ->label('Groupe WhatsApp')
                    ->maxLength(255),
                Forms\Components\Toggle::make('status')
                    ->label('Statut'),
                Forms\Components\TextInput::make('link_video')
                    ->maxLength(255),
                Forms\Components\TextInput::make('link_google')
                    ->maxLength(255),
                Forms\Components\Select::make('user_id')
                    ->label('Utilisateur')
                    ->required()
                    ->relationship('user', 'name'),

                Forms\Components\Select::make('sport_id')
                    ->label('sport')
                    ->required()
                    ->relationship('sport', 'name'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
                Tables\Columns\TextColumn::make('date_published')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\IconColumn::make('status')
                    ->label('Statut')
                    ->boolean(),
                Tables\Columns\TextColumn::make('link_video')
                    ->searchable(),
                Tables\Columns\TextColumn::make('link_google')
                    ->searchable(),
                Tables\Columns\TextColumn::make('user_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sport_id')
                    ->numeric()
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
            'index' => Pages\ListCalendars::route('/'),
            'create' => Pages\CreateCalendar::route('/create'),
            'edit' => Pages\EditCalendar::route('/{record}/edit'),
        ];
    }
}
