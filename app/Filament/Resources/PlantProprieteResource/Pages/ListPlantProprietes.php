<?php

namespace App\Filament\Resources\PlantProprieteResource\Pages;

use App\Filament\Resources\PlantProprieteResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPlantProprietes extends ListRecords
{
    protected static string $resource = PlantProprieteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
