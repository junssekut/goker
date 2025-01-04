<?php

namespace App\Filament\Resources\CareerDetailResource\Pages;

use App\Filament\Resources\CareerDetailResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Pages\Concerns\ExposesTableToWidgets;

class ListCareerDetails extends ListRecords
{
    use ExposesTableToWidgets;
    
    protected static string $resource = CareerDetailResource::class;

    protected function getHeaderWidgets(): array
    {
        return [
            // CareerDetailResource\Widgets\CareerStatus::class,
        ];
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
