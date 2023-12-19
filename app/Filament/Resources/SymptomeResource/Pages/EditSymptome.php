<?php

namespace App\Filament\Resources\SymptomeResource\Pages;

use App\Filament\Resources\SymptomeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSymptome extends EditRecord
{
    protected static string $resource = SymptomeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
