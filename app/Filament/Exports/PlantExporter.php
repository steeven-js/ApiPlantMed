<?php

namespace App\Filament\Exports;

use App\Models\Plant;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;

class PlantExporter extends Exporter
{
    protected static ?string $model = Plant::class;

    public static function getColumns(): array
    {
        return [
            ExportColumn::make('id')
                ->label('ID'),
            ExportColumn::make('name'),
            ExportColumn::make('slug'),
            ExportColumn::make('nscient'),
            ExportColumn::make('famille'),
            ExportColumn::make('genre'),
            ExportColumn::make('description'),
            ExportColumn::make('habitat'),
            ExportColumn::make('propriete'),
            ExportColumn::make('precaution'),
            ExportColumn::make('usageInterne'),
            ExportColumn::make('usageExterne'),
            ExportColumn::make('created_at'),
            ExportColumn::make('updated_at'),
            ExportColumn::make('isActive'),
            ExportColumn::make('mostPopular'),
            ExportColumn::make('bestSeller'),
            ExportColumn::make('newArrivals'),
            ExportColumn::make('recentlyViewed'),
        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Your plant export has completed and ' . number_format($export->successful_rows) . ' ' . str('row')->plural($export->successful_rows) . ' exported.';

        if ($failedRowsCount = $export->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to export.';
        }

        return $body;
    }
}
