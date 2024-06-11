<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\PlantResource;
use App\Models\Plant;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class LatestOrders extends BaseWidget
{
    protected int | string | array $columnSpan = 'full';

    protected static ?string $heading = 'Plantes médicinales';

    protected static ?int $sort = 2;

    public function table(Table $table): Table
    {
        return $table
            ->query(PlantResource::getEloquentQuery()->inRandomOrder())
            ->defaultPaginationPageOption(5)
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('N°')
                    ->searchable(),
                Tables\Columns\SpatieMediaLibraryImageColumn::make('plant-image')
                    ->label('Image')
                    ->label('Image')
                    ->collection('plant-images'),
                Tables\Columns\TextColumn::make('name')
                    ->label('Nom')
                    ->searchable(),
                Tables\Columns\TextColumn::make('symptomes.name')
                    ->label('Symptômes')
                    ->listWithLineBreaks()
                    ->limitList(2)
                    ->expandableLimitedList(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Date de création')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Date de modification')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->description('Les plantes médicinales sont des plantes utilisées pour leurs propriétés thérapeutiques, qu\'elles soient utilisées sous forme de tisanes, de décoctions, de teintures, de gélules, d\'extraits, etc. Elles peuvent être utilisées seules ou en association avec d\'autres plantes. Elles sont utilisées pour leurs propriétés médicinales, mais aussi pour leurs propriétés aromatiques et gustatives.')
            ->actions([
                Tables\Actions\Action::make('Voir')
                    ->url(fn (Plant $record): string => PlantResource::getUrl('edit', ['record' => $record])),
            ]);
    }
}
