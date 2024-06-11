<?php

namespace App\Filament\Resources\SymptomeResource\Pages;

use App\Filament\Resources\SymptomeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Components\Tab;

class ListSymptomes extends ListRecords
{
    protected static string $resource = SymptomeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        return [
            null => Tab::make('All'),
            'Visible' => Tab::make()->query(fn ($query) => $query->where('is_visible', true)),
            'Non Visible' => Tab::make()->query(fn ($query) => $query->where('is_visible', false)),
        ];
    }
}
