<?php

namespace App\Filament\Resources\PlantUtilisationResource\Pages;

use App\Filament\Resources\PlantUtilisationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPlantUtilisations extends ListRecords
{
    protected static string $resource = PlantUtilisationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
