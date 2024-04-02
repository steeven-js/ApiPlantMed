<?php

namespace App\Filament\Resources\PlantResource\Pages;

use App\Filament\Resources\PlantResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Components\Tab;

class ListPlants extends ListRecords
{
    protected static string $resource = PlantResource::class;

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
            'Visible' => Tab::make()->query(fn ($query) => $query->where('isActive', true)),
            'Non Visible' => Tab::make()->query(fn ($query) => $query->where('isActive', false)),
            'Most Popular' => Tab::make()->query(fn ($query) => $query->where('mostPopular', true)),
            'Best Seller' => Tab::make()->query(fn ($query) => $query->where('bestSeller', true)),
            'New Arrivals' => Tab::make()->query(fn ($query) => $query->where('newArrivals', true)),
            'Recently Viewed' => Tab::make()->query(fn ($query) => $query->where('recentlyViewed', true)),
        ];
    }
}
