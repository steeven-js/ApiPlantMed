<?php

namespace App\Filament\Resources\PlantPrecautionResource\Pages;

use App\Filament\Resources\PlantPrecautionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPlantPrecautions extends ListRecords
{
    protected static string $resource = PlantPrecautionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
