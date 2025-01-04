<?php

namespace App\Filament\Resources\CareerDetailResource\Widgets;

use Filament\Forms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Widgets\Widget;
use Illuminate\Database\Eloquent\Model;

class StatusDropdownWidget extends Widget implements HasForms
{
    use Forms\Concerns\InteractsWithForms;

    public ?Model $record = null;

    protected static string $view = 'filament.resources.career-detail-resource.widgets.status-dropdown-widget';

    public $data = [];

    /**
     * Mount the widget with the record.
     */
    public function mount(Model $record): void
    {
        $this->record = $record;
        $this->form->fill([
            'career_status' => $record->career_status,
        ]);
    }

    /**
     * Define the form schema.
     */
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('career_status')
                    ->hiddenLabel()
                    ->options([
                        'Applied' => 'Applied',
                        'Psychological Test' => 'Psychological Test',
                        'Interview' => 'Interview',
                        'MCU' => 'MCU',
                        'Accepted' => 'Accepted',
                    ])
                    ->reactive()
                    ->afterStateUpdated(fn ($state) => $this->updateStatus($state)),
            ])
            ->model($this->record)
            ->statePath('data');
    }

    /**
     * Handle the status update.
     */
    public function updateStatus($state): void
    {
        if ($this->record->career_status !== $state) {
            $this->record->update(['career_status' => $state]);
            $this->dispatch('status-updated');
        }
    }

    /**
     * Pass data to the Blade view.
     */
    protected function getViewData(): array
    {
        return [
            'form' => $this->form,
        ];
    }
}
