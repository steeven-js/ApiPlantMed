<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Plant;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\PlantResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PlantResource\RelationManagers;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

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

                                Forms\Components\Textarea::make('description')
                                    ->rows(10)
                                    ->cols(20),

                                Forms\Components\Textarea::make('habitat')
                                    ->rows(5)
                                    ->cols(10),
                            ])
                            ->description('Informations générales sur la plante'),

                        Forms\Components\Section::make('Images')
                            ->schema([
                                SpatieMediaLibraryFileUpload::make('media')
                                    ->collection('plant-images')
                                    ->multiple()
                                    ->maxFiles(5)
                                    ->hiddenLabel(),
                            ])
                            ->collapsible()
                    ])
                    ->columnSpan(['lg' => 2]),

                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Section::make('Information scientifiques')
                            ->schema([
                                Forms\Components\TextInput::make('nscient'),
                                Forms\Components\TextInput::make('famille'),
                                Forms\Components\TextInput::make('genre'),

                                Forms\Components\Select::make('symptomes')
                                ->relationship('symptomes', 'name')
                                ->multiple()
                                ->required(),
                            ])
                            ->description('Informations scientifiques sur la plante'),

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
            RelationManagers\ProprietesRelationManager::class,
            RelationManagers\PrecautionsRelationManager::class,
            RelationManagers\UtilisationsRelationManager::class,
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
}
