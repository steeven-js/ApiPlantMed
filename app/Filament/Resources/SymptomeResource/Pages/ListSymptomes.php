<?php

namespace App\Filament\Resources\SymptomeResource\Pages;

use App\Filament\Resources\SymptomeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSymptomes extends ListRecords
{
    protected static string $resource = SymptomeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
