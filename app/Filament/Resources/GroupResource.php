<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GroupResource\Pages;
use App\Filament\Resources\GroupResource\RelationManagers;
use App\Models\Group;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GroupResource extends Resource
{
    protected static ?string $model = Group::class;

    protected static ?string $navigationLabel = "Groupe";
    protected static ?string $label = "Groupe";
    protected static ?string $navigationGroup = 'Sports';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Titre')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(function (callable $set, $state) {
                        $slug = \Illuminate\Support\Str::slug($state);
                        $originalSlug = $slug;
                        $counter = 1;

                        while (\App\Models\Group::where('slug', $slug)->exists()) {
                            $slug = "{$originalSlug}-{$counter}";
                            $counter++;
                        }

                        $set('slug', $slug);
                    }),
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(255)
                    ->unique(ignoreRecord: true),
                Forms\Components\TextInput::make('subtitle')
                    ->label('Sous-titre')
                    ->maxLength(255),
                Forms\Components\Select::make('service_id')
                    ->label('Service')
                    ->relationship('service', 'title')
                    ->required()
                    ->live(), // Necesario para reactividad

                    Forms\Components\Select::make('sport')
                        ->label('Sport')
                        ->options(function (callable $get) {
                            $serviceId = $get('service_id');
                            if (!$serviceId) {
                                return [];
                            }
                            return \App\Models\ServiceImage::where('service_id', $serviceId)->pluck('name', 'id');
                        })
                        ->required()
                        ->reactive(), // Importante para que se actualicen las opciones al cambiar el service_id
                Forms\Components\Select::make('color')
                    ->label('Couleurs')
                    ->options([
                        'red'       => 'Rouge',
                        'blue'      => 'Bleu',
                        'green'     => 'Vert',
                        'yellow'    => 'Jaune',
                        'black'     => 'Noir',
                        'white'     => 'Blanc',
                        'orange'    => 'Orange',
                        'purple'    => 'Violet',
                        'pink'      => 'Rose',
                        'brown'     => 'Marron',
                        'gray'      => 'Gris',
                        'cyan'      => 'Cyan',
                        'teal'      => 'Turquoise',
                        'lime'      => 'Citron vert',
                        'indigo'    => 'Indigo',
                        'gold'      => 'Or',
                        'silver'    => 'Argent',
                    ]),
                Forms\Components\Toggle::make('status')
                    ->label('Statut')
                    ->default(1)
                    ->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Titre')
                    ->searchable(),
                Tables\Columns\TextColumn::make('subtitle')
                    ->label('Sous-titre')
                    ->searchable(),
                Tables\Columns\IconColumn::make('status')
                    ->label('Statut')
                    ->boolean(),
                Tables\Columns\TextColumn::make('sportImage.name')
                    ->label('Sport')
                    ->searchable()
                    ->sortable()


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
            'index' => Pages\ListGroups::route('/'),
            'create' => Pages\CreateGroup::route('/create'),
            'edit' => Pages\EditGroup::route('/{record}/edit'),
        ];
    }

    public static function shouldRegisterNavigation(): bool
    {
        return false; // Oculta este recurso del menú de navegación
    }
}
