<?php

namespace App\Filament\Resources\CareerResource\Pages;

use App\Filament\Resources\CareerResource;
use Filament\Resources\Pages\ViewRecord;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Tabs\Tab;
use App\Models\CareerDetail;
use Illuminate\Contracts\View\View;

class ViewCareer extends ViewRecord
{
    protected static string $resource = CareerResource::class;
    protected ?string $heading = '';
    protected static string $view = 'filament.resources.career-resource.pages.view-career';
    public $activeTab = 'pelamar';
    public $records;

    public function mount($record): void
    {
        parent::mount($record);

        $this->records = [
            'Applied' => $this->getRecords()->where('career_status', 'Applied')->get(),
            'Psychological Test' => $this->getRecords()->where('career_status', 'Psychological Test')->get(),
            'Interview' => $this->getRecords()->where('career_status', 'Interview')->get(),
            'MCU' => $this->getRecords()->where('career_status', 'MCU')->get(),
            'Accepted' => $this->getRecords()->where('career_status', 'Accepted')->get(),
        ];
    }

    public function getRecords()
    {
        return CareerDetail::query()
            ->where('career_id', $this->record->id)
            ->with('user');
    }

    public function getBreadcrumbs(): array
    {
        $record = $this->record; // Get the current record (career)

        return [
            route('filament.hrd.pages.dashboard') => 'Beranda',
            route('filament.hrd.resources.careers.card') => 'Lowongan',
            route('filament.hrd.resources.careers.view', $record) => $record->name, // Dynamically generate the route
        ];
    }

}
