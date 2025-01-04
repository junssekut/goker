<?php

namespace App\Filament\Resources\CareerDetailResource\Widgets;

use Filament\Tables;
use Filament\Widgets\TableWidget as BaseWidget;
use App\Models\CareerDetail;
use Filament\Tables\Table;
use Filament\Tables\Actions\Action;
use Illuminate\Support\Facades\Storage;
use Filament\Notifications\Notification;

use Illuminate\Database\Eloquent\Model;
use Filament\Tables\Actions\ActionGroup;
use Illuminate\Support\Facades\Response;

class ApplicantTable extends BaseWidget
{
    public ?int $careerId = null; // Define the career ID as a property

    public function mount(int $careerId): void
    {
        $this->careerId = $careerId;
    }

    public function table(Table $table): Table {
        return $table
            ->deferLoading()
            ->striped()

            ->emptyStateHeading('Calon pelamar kosong')
            ->emptyStateDescription('Belum ada calon pelamar nih! Apa kita iklanin di tv ya?')
            ->recordUrl(fn (Model $record): string => route('filament.hrd.resources.career-details.view', ['record' => $record]))
            ->header(view('filament.applicant-table-widget', [ 'count' => CareerDetail::query()->where('career_id', $this->careerId)->count()]))

            ->query(CareerDetail::query()
                ->where('career_id', $this->careerId)
                ->with('user')
                ->orderBy('score', 'desc'))
            ->columns([
                Tables\Columns\ImageColumn::make('')
                    ->circular()
                    ->size(32)
                    ->getStateUsing(function ($record) {
                        return $record->profile->gender === 'M' 
                            ? asset('assets/images/orang2.svg') 
                            : asset('assets/images/orang1.svg');
                    }),
                Tables\Columns\TextColumn::make('user.profile.name')->label('Nama')->searchable(),
                Tables\Columns\BadgeColumn::make('career_status')
                        ->label('Status')
                        ->colors([
                            'status-applied' => 'Applied',
                            'status-psychological-test' => 'Psychological Test',
                            'status-interview' => 'Interview',
                            'status-mcu' => 'MCU',
                            'status-accepted' => 'Accepted',
                        ])
                        ->alignCenter()
                        ->icon(fn ($record) => match ($record->career_status) {
                            'Applied' => 'heroicon-m-document-check',
                            'Psychological Test' => 'heroicon-m-clipboard-document',
                            'Interview' => 'heroicon-m-user-group',
                            'MCU' => 'heroicon-m-heart',
                            'Accepted' => 'heroicon-m-check-badge',
                            default => 'heroicon-m-question-mark-circle', // Fallback icon for unknown statuses
                        }),
                Tables\Columns\BadgeColumn::make('score')
                    ->label('Score')
                    ->formatStateUsing(fn ($state) => (string) $state) // Ensure the score is displayed as text
                    ->colors([
                        'success' => fn ($state) => $state >= 70,  // Green for high scores
                        'warning' => fn ($state) => $state >= 40 && $state < 70,  // Yellow for moderate scores
                        'danger' => fn ($state) => $state < 40,  // Red for low scores
                    ])
                    ->alignCenter()
                    ->icon(fn ($state) => $state >= 70
                        ? 'heroicon-m-check-circle'
                        : ($state >= 40 ? 'heroicon-m-arrow-up-circle' : 'heroicon-m-arrow-down-circle')
                    )
                    ->suffix('%'),
            ])
            ->actions([
                ActionGroup::make([
                    Action::make('lowongan')
                        ->label('Lihat Calon')
                        ->icon('heroicon-m-eye')
                        ->color('goker-sangat-gelap')
                        ->url(fn ($record) => route('filament.hrd.resources.career-details.view', $record)),
                    Action::make('download')
                        ->label('Download CV')
                        ->icon('heroicon-m-arrow-down-tray')
                        ->color('status-psychological-test')
                        ->url(fn ($record) => route('career.downloadCv', ['record' => $record])) // Link to the download route
                        // ->url(fn ($record) => route('filament.hrd.resources.careers.view', $record->career_id)),,
                ])
                ->icon('heroicon-o-ellipsis-horizontal-circle')
                ->tooltip('Mau ngambil tindakan?')
                ->color('goker-sangat-gelap'),
                ]);
    }

    // protected function getTableQuery(): \Illuminate\Database\Eloquent\Builder
    // {
    //     // Fetch all CareerDetail records where the career_id matches the given careerId
        // return CareerDetail::query()
        //     ->where('career_id', $this->careerId)
        //     ->with('user')
        //     ->orderBy('score', 'desc');
    // }

    // protected function getTableColumns(): array
    // {
    //     return [
    //         Tables\Columns\ImageColumn::make('')
    //                 ->circular()
    //                 ->size(32)
    //                 ->getStateUsing(function ($record) {
    //                     return $record->profile->gender === 'M' 
    //                         ? asset('assets/images/orang2.svg') 
    //                         : asset('assets/images/orang1.svg');
    //                 }),
    //         Tables\Columns\TextColumn::make('user.profile.name')->label('Nama')->searchable(),
    //         Tables\Columns\BadgeColumn::make('career_status')
    //                 ->label('Status')
    //                 ->colors([
    //                     'status-applied' => 'Applied',
    //                     'status-psychological-test' => 'Psychological Test',
    //                     'status-interview' => 'Interview',
    //                     'status-mcu' => 'MCU',
    //                     'status-accepted' => 'Accepted',
    //                 ])
    //                 ->alignCenter()
    //                 ->icon(fn ($record) => match ($record->career_status) {
    //                     'Applied' => 'heroicon-m-document-check',
    //                     'Psychological Test' => 'heroicon-m-clipboard-document',
    //                     'Interview' => 'heroicon-m-user-group',
    //                     'MCU' => 'heroicon-m-heart',
    //                     'Accepted' => 'heroicon-m-check-badge',
    //                     default => 'heroicon-m-question-mark-circle', // Fallback icon for unknown statuses
    //                 }),
    //         Tables\Columns\BadgeColumn::make('score')
    //             ->label('Score')
    //             ->formatStateUsing(fn ($state) => (string) $state) // Ensure the score is displayed as text
    //             ->colors([
    //                 'success' => fn ($state) => $state >= 70,  // Green for high scores
    //                 'warning' => fn ($state) => $state >= 40 && $state < 70,  // Yellow for moderate scores
    //                 'danger' => fn ($state) => $state < 40,  // Red for low scores
    //             ])
    //             ->alignCenter()
    //             ->icon(fn ($state) => $state >= 70
    //                 ? 'heroicon-m-check-circle'
    //                 : ($state >= 40 ? 'heroicon-m-arrow-up-circle' : 'heroicon-m-arrow-down-circle')
    //             )
    //             ->suffix('%'),
    //     ];
    // }

    // protected function getTableActions(): array
    // {
    //     return [
            // ActionGroup::make([
            //     Action::make('lowongan')
            //         ->label('Lihat Calon')
            //         ->icon('heroicon-m-eye')
            //         ->color('goker-sangat-gelap')
            //         ->url(fn ($record) => route('filament.hrd.resources.career-details.view', $record)),
            //     Action::make('download')
            //         ->label('Download CV')
            //         ->icon('heroicon-m-arrow-down-tray')
            //         ->color('status-psychological-test')
            //         ->url(fn ($record) => route('career.downloadCv', ['record' => $record])) // Link to the download route
            //         // ->url(fn ($record) => route('filament.hrd.resources.careers.view', $record->career_id)),,
            // ])
            // ->icon('heroicon-o-ellipsis-horizontal-circle')
            // ->tooltip('Mau ngambil tindakan?')
            // ->color('goker-sangat-gelap'),
    //     ];
    // }

}
