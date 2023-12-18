<?php

namespace App\Filament\Resources\ProprieteResource\Pages;

use App\Filament\Resources\ProprieteResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProprietes extends ListRecords
{
    protected static string $resource = ProprieteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
