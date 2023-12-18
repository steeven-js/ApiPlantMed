<?php

namespace App\Filament\Resources\PrecautionResource\Pages;

use App\Filament\Resources\PrecautionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPrecaution extends EditRecord
{
    protected static string $resource = PrecautionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
