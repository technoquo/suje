<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ActivityResource\Pages;
use App\Filament\Resources\ActivityResource\RelationManagers;
use App\Models\Activity;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ActivityResource extends Resource
{
    protected static ?string $model = Activity::class;

    protected static ?string $navigationLabel = "Activités";
    protected static ?string $label = "Activités";
    protected static ?string $navigationGroup = 'Evénements';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->live(onBlur: true) // Updates the slug as you type or on blur
                    ->afterStateUpdated(function (callable $set, $state) {
                        $set('slug', \Illuminate\Support\Str::slug($state));
                    }),
                Forms\Components\TextInput::make('slug')
                    ->label('Slug')
                    ->required()
                    ->maxLength(255),
                Forms\Components\RichEditor::make('description')
                    ->label('Description')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('image')
                    ->image(),
                Forms\Components\DateTimePicker::make('date_published')
                    ->label('Date de publication')
                    ->required(),
                Forms\Components\TextInput::make('link_video')
                    ->label('Lien vidéo')
                    ->maxLength(255),
                Forms\Components\TextInput::make('link_google')
                    ->label('Liens externes')
                    ->maxLength(255),
                Forms\Components\FileUpload::make('pdf')
                    ->label('Fichier PDF')
                    ->acceptedFileTypes(['application/pdf']) // Solo permite PDFs
                    ->directory('pdfs') // Carpeta dentro de storage/app/public/pdfs
                    ->downloadable() // Agrega botón de descarga en el panel
                    ->openable() // Agrega botón para abrir el PDF en el navegador
                    ->preserveFilenames() // Mantiene el nombre original del archivo
                    ->maxSize(10240), // Máx. 10 MB
                Forms\Components\Select::make('user_id')
                    ->required()
                    ->relationship('user', 'name'),
                Forms\Components\Select::make('service_id')
                    ->label('Ligue')
                    ->required()
                    ->relationship('service', 'title')
                    ->reactive()
                    ->afterStateUpdated(fn (callable $set) => $set('group_id', null)), // Hacerlo reactivo
                Forms\Components\Select::make('service_image_id') // CORREGIDO: nombre único
                    ->label('Sport')
                    ->required()
                    ->relationship('serviceImage', 'name')
                    ->options(function (callable $get) {
                        $serviceId = $get('service_id');

                        if (!$serviceId) {
                            return [];
                        }

                        return \App\Models\ServiceImage::where('service_id', $serviceId)
                            ->pluck('name', 'id')
                            ->toArray();
                    })
                    ->preload()
                    ->disabled(fn (callable $get) => !$get('service_id')) // Desactivar si no hay servicio seleccionado
                    ->reactive()
                    ->afterStateUpdated(fn (callable $set) => $set('group_id', null)),
                Forms\Components\Select::make('group_id')
                    ->label('Groupe')
                    ->required()
                    ->relationship('group', 'title')
                    ->options(function (callable $get) {
                        $serviceId = $get('service_id');
                        $sportId = $get('service_image_id'); // deporte

                        if (!$serviceId || !$sportId) {
                            return [];
                        }

                        return \App\Models\Group::where('service_id', $serviceId)
                            ->where('sport', $sportId)
                            ->pluck('title', 'id')
                            ->toArray();
                    })
                    ->reactive()
                    ->disabled(fn (callable $get) => !$get('service_id') || !$get('service_image_id')),
                Forms\Components\Toggle::make('status')
                    ->label('Statut')

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('title')
                    ->label('Titre')
                    ->searchable(),
                Tables\Columns\TextColumn::make('service.title')
                    ->label('Ligue')
                    ->sortable(),
                Tables\Columns\TextColumn::make('serviceimage.name')
                    ->label('Sport')
                    ->sortable(),
                Tables\Columns\TextColumn::make('group.title')
                    ->label('Groupe')
                    ->sortable(),
                Tables\Columns\TextColumn::make('date_published')
                    ->label('Date de publication')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\IconColumn::make('status')
                    ->label('Statut')
                    ->boolean()
                    ->searchable(),

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
            'index' => Pages\ListActivities::route('/'),
            'create' => Pages\CreateActivity::route('/create'),
            'edit' => Pages\EditActivity::route('/{record}/edit'),
        ];
    }
}
