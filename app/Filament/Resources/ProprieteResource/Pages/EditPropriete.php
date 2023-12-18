<?php

namespace App\Filament\Resources\ProprieteResource\Pages;

use App\Filament\Resources\ProprieteResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPropriete extends EditRecord
{
    protected static string $resource = ProprieteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
