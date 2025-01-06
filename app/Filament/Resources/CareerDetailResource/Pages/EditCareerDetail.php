<?php

namespace App\Filament\Resources\CareerDetailResource\Pages;

use App\Filament\Resources\CareerDetailResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCareerDetail extends EditRecord
{
    protected static string $resource = CareerDetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}