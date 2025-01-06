<?php

namespace App\Filament\Resources\CareerDetailResource\Widgets;

use Filament\Widgets\Widget;
use Illuminate\Database\Eloquent\Model;

use Filament\Infolists\Infolist;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;

use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Livewire\Attributes\On; // Ensure you include this
use Filament\Notifications\Notification;

class OverviewWidget extends Widget implements HasForms
{
    use Forms\Concerns\InteractsWithForms;

    public ?Model $record = null;

    /**
     * The Blade view for this widget.
     */
    protected static string $view = 'filament.resources.career-detail-resource.widgets.overview-widget';

    public array $data = [
        'career_status' => '',
        'score' => '',
        'psychological_test_score' => '',
        'interview_score' => '',
        'mcu_score' => '',
    ];

    /**
     * Mount the widget with the record.
     */
    public function mount(Model $record): void
    {
        $this->record = $record;
        $this->form->fill([
            'career_status' => $record->career_status,
            'score' => $record->score,
            'psychological_test_score' => $record->psychological_test_score,
            'interview_score' => $record->interview_score,
            'mcu_score' => $record->mcu_score,
        ]);
    }

    #[On('score-updated')]
    public function refreshScore() {
        $this->record->refresh();
    }

    /**
     * Pass data to the Blade view.
     */
    protected function getViewData(): array
    {
        return [
            'record' => $this->record,
            'infolist' => $this->getInfolist(),
            'form' => $this->form,
        ];
    }

    protected function getInfolist(): Infolist
    {
        return Infolist::make()
            ->schema([
                Section::make('Overview')
                    ->icon('heroicon-m-information-circle')
                    ->iconColor('goker-gelap')
                    ->heading('Overview Pelamar')
                    ->description('Lihat selengkapnya tentang pelamar dan skor-skor evaluasinya!')
                    ->collapsed(false)
                    ->schema([
                        TextEntry::make('review')
                            ->label('')
                            ->icon('heroicon-m-pencil-square')
                            ->iconPosition('after')
                            ->iconColor('goker-gelap'),
                    ]),
                ])
            ->record($this->record);
    }
    
    public function updateScore($field, $state): void
    {
        // Update the record in the database when the score field is changed
        if ($this->record[$field] !== $state) {
            $this->record->update([$field => $state]);
            $this->dispatch('score-updated');

            Notification::make()
                ->title('Skor berhasil diganti!')
                ->body('Skor ' . $field . ' ' . $this->record->profile->name . ' sekarang ' . $state . '!')
                ->icon('heroicon-o-check-circle')
                ->success()
                ->send();
        }
    }

    public function form(Form $form): Form
{
    return $form
        ->schema([
            Forms\Components\Select::make('career_status')
                ->label('Status Pelamar')
                ->suffixIcon('heroicon-m-tag')
                ->suffixIconColor('goker-gelap')
                ->hintIcon('heroicon-m-information-circle')
                ->hintIconTooltip('Ganti status pelamar disini ya!')
                ->columnSpan(1)
                ->options([
                    'Applied' => 'Applied',
                    'Psychological Test' => 'Psychological Test',
                    'Interview' => 'Interview',
                    'MCU' => 'MCU',
                    'Accepted' => 'Accepted',
                ])
                ->live()
                ->afterStateUpdated(fn ($state) => $this->updateStatus($state)),

            // CV Score
            TextInput::make('score')
                ->label('Skor CV')
                ->suffixIcon('heroicon-m-document-check')
                ->suffixIconColor('goker-gelap')
                ->hintIcon('heroicon-m-information-circle')
                ->hintIconTooltip('Yang ini gabisa di ubah ya!')
                ->numeric()
                ->minValue(0)
                ->maxValue(100)
                ->readOnly()
                ->visible(fn ($record) => $record->career_status === 'Applied'),

            // Psychological Test Score
            TextInput::make('psychological_test_score')
                ->label('Skor Psikotes')
                ->suffixIcon('heroicon-m-clipboard-document')
                ->suffixIconColor('goker-gelap')
                ->numeric()
                ->minValue(0)
                ->maxValue(100)
                ->visible(fn ($record) => $record->career_status === 'Psychological Test')
                ->hintIcon('heroicon-m-information-circle')
                ->hintIconTooltip('Masukkan skor pelamar disini ya!')
                ->live()
                ->afterStateUpdated(fn ($state) => $this->updateScore('psychological_test_score', $state)),

            // Interview Score
            TextInput::make('interview_score')
                ->label('Skor Wawancara')
                ->suffixIcon('heroicon-m-user-group')
                ->suffixIconColor('goker-gelap')
                ->numeric()
                ->minValue(0)
                ->maxValue(100)
                ->visible(fn ($record) => $record->career_status === 'Interview')
                ->hintIcon('heroicon-m-information-circle')
                ->hintIconTooltip('Masukkan skor pelamar disini ya!')
                ->afterStateUpdated(fn ($state) => $this->updateScore('interview_score', $state)),

            // MCU Score
            TextInput::make('mcu_score')
                ->label('Skor Kesehatan')
                ->suffixIcon('heroicon-m-heart')
                ->suffixIconColor('goker-gelap')
                ->numeric()
                ->minValue(0)
                ->maxValue(100)
                ->required(fn ($get) => $get('career_status') === 'MCU')
                ->visible(fn ($record) => $record->career_status === 'MCU')
                ->hintIcon('heroicon-m-information-circle')
                ->hintIconTooltip('Masukkan skor pelamar disini ya!')
                ->afterStateUpdated(fn ($state) => $this->updateScore('mcu_score', $state)),
        ])
        ->model($this->record)
        ->statePath('data')
        ->columns(2);
}

public function updateStatus($state): void
{
    $updateData = ['career_status' => $state];

    if ($this->record->career_status !== $state) {
        
        Notification::make()
            ->title('Status berhasil diganti!')
            ->body('Lamarannya ' . $this->record->profile->name . ' udah diganti statusnya jadi ' . $this->record->career_status . ' ya!')
            ->icon('heroicon-o-check-circle')
            ->success()
            ->send();

        $this->record->update($updateData);
        $this->dispatch('status-updated');
    }
}

    

}
