<?php

namespace App\Filament\Resources\CareerDetailResource\Pages;

use App\Filament\Resources\CareerDetailResource;
use Filament\Resources\Pages\ViewRecord;
use Illuminate\Database\Eloquent\Model;
use Filament\Tables;
use Filament\Tables\Table;
use Livewire\Attributes\On; // Ensure you include this

class ViewCareerDetail extends ViewRecord
{
    protected static string $resource = CareerDetailResource::class;

    protected static string $view = 'filament.pages.view-career-detail';
    protected ?string $heading = '';

    /**
     * Pass the record to widgets explicitly.
     */
    public function getWidgetData(): array
    {
        return [
            'record' => $this->getRecord(),
        ];
    }

    public function getBreadcrumbs(): array
    {
        $record = $this->getRecord();

        return [
            route('filament.hrd.pages.dashboard') => 'Beranda',
            route('filament.hrd.resources.careers.card') => 'Lowongan',
            route('filament.hrd.resources.careers.view', $record->career) => $record->career->name,
            route('filament.hrd.resources.career-details.view', $record) => $record->profile->name,
        ];
    }
}
