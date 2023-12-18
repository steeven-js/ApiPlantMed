<?php

namespace App\Filament\Resources\UtilisationResource\Pages;

use App\Filament\Resources\UtilisationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUtilisation extends EditRecord
{
    protected static string $resource = UtilisationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
