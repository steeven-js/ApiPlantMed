<?php

namespace App\Filament\Resources\PrecautionResource\Pages;

use App\Filament\Resources\PrecautionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPrecautions extends ListRecords
{
    protected static string $resource = PrecautionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
