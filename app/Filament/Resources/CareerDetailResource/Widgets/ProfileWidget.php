<?php

namespace App\Filament\Resources\CareerDetailResource\Widgets;

use Filament\Widgets\Widget;
use Illuminate\Database\Eloquent\Model;
use Livewire\Attributes\On; // Ensure you include this
use Filament\Notifications\Notification;

class ProfileWidget extends Widget
{
    public ?Model $record = null;

    protected static string $view = 'filament.resources.career-detail-resource.widgets.profile-widget';

    /**
     * Mount the widget with the record.
     */
    public function mount(Model $record): void
    {
        $this->record = $record; // Assign the record to the property
    }

    /**
     * Listen for the status-updated event.
     */
    #[On('status-updated')]
    public function refreshStatus()
    {
        $this->record->refresh();
    }

    /**
     * Pass data to the Blade view.
     */
    protected function getViewData(): array
    {
        return [
            'record' => $this->record,
        ];
    }

    public function deleteRecord()
    {
        if ($this->record) {
            $this->record->delete();

            Notification::make()
                ->title('Lamaran berhasil dihapus!')
                ->body('Lamarannya ' . $this->record->profile->name . ' udah dihapus ya!')
                ->icon('heroicon-o-check-circle')
                ->success()
                ->send();

            return redirect()->route('filament.hrd.resources.careers.view', ['record' => $this->record->career]);
        }
    }
}
