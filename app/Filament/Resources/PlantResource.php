<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Plant;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use App\Filament\Exports\PlantExporter;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\PlantResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PlantResource\RelationManagers;

class PlantResource extends Resource
{
    protected static ?string $model = Plant::class;

    protected static ?string $navigationIcon = 'heroicon-o-heart';

    protected static ?string $recordTitleAttribute = 'name';

    protected static ?string $navigationLabel = 'Plantes médicinales';

    protected static ?string $modelLabel = 'Plantes médicinales';

    protected static ?string $navigationGroup = 'Application';

    protected static ?int $navigationSort = 0;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Section::make('Informations')
                            ->schema([
                                Forms\Components\TextInput::make('name')
                                    ->required()
                                    ->maxLength(255)
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(function (string $operation, $state, Forms\Set $set) {
                                        if ($operation !== 'create' && $operation !== 'edit') {
                                            return;
                                        }

                                        $set('slug', Str::slug($state));
                                    }),

                                Forms\Components\TextInput::make('slug')
                                    ->disabled()
                                    ->dehydrated()
                                    ->required()
                                    ->maxLength(255)
                                    ->unique(Plant::class, 'slug', ignoreRecord: true),
                            ])
                            ->description('Informations générales sur la plante'),

                        Forms\Components\Section::make('description')
                            ->schema([
                                Forms\Components\Textarea::make('description')
                                    ->label('description')
                                    ->rows(5)
                                    ->cols(10),
                            ])
                            ->collapsible(),

                        Forms\Components\Section::make('Images')
                            ->schema([
                                Forms\Components\SpatieMediaLibraryFileUpload::make('media')
                                    ->collection('plant-images')
                                    ->multiple()
                                    ->maxFiles(5)
                                    ->hiddenLabel(),
                            ])
                            ->collapsible(),

                        Forms\Components\Section::make('habitat')
                            ->schema([
                                Forms\Components\Textarea::make('habitat')
                                    ->label('Habitat')
                                    ->rows(5)
                                    ->cols(10),
                            ])
                            ->collapsible(),

                        Forms\Components\Section::make('propriete')
                            ->schema([
                                Forms\Components\Textarea::make('propriete')
                                    ->label('propriete')
                                    ->rows(5)
                                    ->cols(10),
                            ])
                            ->collapsible(),

                        Forms\Components\Section::make('usageInterne')
                            ->schema([
                                Forms\Components\Textarea::make('usageInterne')
                                    ->label('usageInterne')
                                    ->rows(5)
                                    ->cols(10),
                            ])
                            ->collapsible(),

                        Forms\Components\Section::make('usageExterne')
                            ->schema([
                                Forms\Components\Textarea::make('usageExterne')
                                    ->label('usageExterne')
                                    ->rows(5)
                                    ->cols(10),
                            ])
                            ->collapsible(),

                        Forms\Components\Section::make('precaution')
                            ->schema([
                                Forms\Components\Textarea::make('precaution')
                                    ->label('precaution')
                                    ->rows(5)
                                    ->cols(10),
                            ])
                            ->collapsible(),

                        Forms\Components\Section::make('source')
                            ->schema([
                                Forms\Components\Textarea::make('source')
                                    ->label('Source des informations')
                                    ->rows(5)
                                    ->cols(10),
                            ])
                            ->collapsible(),
                    ])
                    ->columnSpan(['lg' => 2]),

                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Section::make('Status de la plante')
                            ->schema([
                                Forms\Components\Toggle::make('isActive')
                                    ->label('Visible')
                                    ->helperText('Activer ou désactiver la plante pour la rendre visible ou non sur l\'application')
                                    ->default(false),
                            ]),

                        Forms\Components\Section::make('Information scientifiques')
                            ->schema([
                                Forms\Components\TextInput::make('nscient'),
                                Forms\Components\TextInput::make('famille'),
                                Forms\Components\TextInput::make('genre'),

                                Forms\Components\Select::make('symptomes')
                                    ->relationship('symptomes', 'name')
                                    ->multiple()
                                    ->required(),
                            ])->description('Informations scientifiques sur la plante'),

                        Forms\Components\Section::make('Palmarès')
                            ->schema([
                                Forms\Components\Toggle::make('mostPopular')
                                    ->label('Populaire')
                                    ->helperText('Marquer la plante comme étant populaire')
                                    ->default(false),
                                Forms\Components\Toggle::make('bestSeller')
                                    ->label('Meilleure vente')
                                    ->helperText('Marquer la plante comme étant la meilleure vente')
                                    ->default(false),
                                Forms\Components\Toggle::make('newArrivals')
                                    ->label('Nouveautés')
                                    ->helperText('Marquer la plante comme étant une nouveauté')
                                    ->default(false),
                                Forms\Components\Toggle::make('recentlyViewed')
                                    ->label('Récemment consulté')
                                    ->helperText('Marquer la plante comme étant récemment consultée')
                                    ->default(false),
                            ]),
                    ])
                    ->columnSpan(['lg' => 1]),
            ])
            ->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->searchable(),
                Tables\Columns\SpatieMediaLibraryImageColumn::make('plant-image')
                    ->label('Image')
                    ->collection('plant-images'),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\ToggleColumn::make('isActive')
                    ->sortable()
                    ->toggleable()
                    ->label('Visible'),
                Tables\Columns\ToggleColumn::make('mostPopular')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label('Populaire'),
                Tables\Columns\ToggleColumn::make('bestSeller')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label('Meilleure vente'),
                Tables\Columns\ToggleColumn::make('newArrivals')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label('Nouveautés'),
                Tables\Columns\ToggleColumn::make('recentlyViewed')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label('Récemment consulté'),
                Tables\Columns\TextColumn::make('symptomes.name')
                    ->label('Symptomes')
                    ->listWithLineBreaks()
                    ->limitList(2)
                    ->expandableLimitedList(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\ExportAction::make()
                    ->exporter(PlantExporter::class)
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->description('Les plantes médicinales sont des plantes utilisées pour leurs propriétés thérapeutiques, qu\'elles soient utilisées sous forme de tisanes, de décoctions, de teintures, de gélules, d\'extraits, etc. Elles peuvent être utilisées seules ou en association avec d\'autres plantes. Elles sont utilisées pour leurs propriétés médicinales, mais aussi pour leurs propriétés aromatiques et gustatives.');
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
            'index' => Pages\ListPlants::route('/'),
            'create' => Pages\CreatePlant::route('/create'),
            'edit' => Pages\EditPlant::route('/{record}/edit'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return static::$model::count();
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
