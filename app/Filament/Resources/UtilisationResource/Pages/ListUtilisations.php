<?php

namespace App\Filament\Resources\UtilisationResource\Pages;

use App\Filament\Resources\UtilisationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUtilisations extends ListRecords
{
    protected static string $resource = UtilisationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
