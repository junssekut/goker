<?php

namespace App\Filament\Widgets;

use Filament\Widgets\TableWidget as BaseWidget;
use App\Models\CareerDetail;
use Filament\Tables\Table;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\ImageColumn;

use Illuminate\Database\Eloquent\Model;
use Filament\Tables\Actions\ActionGroup;

class CareerDetailTableWidget extends BaseWidget
{
    protected int | string | array $columnSpan = '1';

    public function table(Table $table): Table
    {
        return $table
            ->deferloading()
            ->striped()
            
            ->emptyStateHeading('Calon pelamar kosong')
            ->emptyStateDescription('Belum ada calon pelamar nih! Apa kita iklanin di tv ya?')
            ->recordUrl(fn (Model $record): string => route('filament.hrd.resources.career-details.view', ['record' => $record]))
            ->header(view('filament.career-detail-table-widget', [ 'count' => CareerDetail::count() ]))

            ->query(CareerDetail::query())

            ->columns([
                Tables\Columns\ImageColumn::make('')
                    ->circular()
                    ->size(32)
                    ->getStateUsing(function ($record) {
                        return $record->profile->gender === 'M' 
                            ? asset('assets/images/orang2.svg') 
                            : asset('assets/images/orang1.svg');
                    }),
                Tables\Columns\TextColumn::make('profile.name')
                    ->label('Nama')
                    ->searchable(query: function ($query, $search) {
                        $query->whereHas('profile', function ($query) use ($search) {
                            $query->where('user_profiles.name', 'like', "%{$search}%");
                        });
                    }),
                Tables\Columns\TextColumn::make('career.name')->label('Pekerjaan'),
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
            ])
            ->filters([ // Add any filters if needed
                Tables\Filters\SelectFilter::make('career_status')
                    ->options([
                        'Applied' => 'CV Diterima',
                        'Psychological Test' =>'Psikotes',
                        'Interview' => 'Wawancara',
                        'MCU' => 'Kesehatan',
                        'Accepted' => 'Diterima', 
                    ]),
            ])
            ->actions([
                ActionGroup::make([
                    Action::make('proses')
                        ->label('Lihat Proses')
                        ->icon('heroicon-m-eye')
                        ->color('goker-sangat-gelap')
                        ->url(fn ($record) => route('filament.hrd.resources.career-details.view', $record)),
                    Action::make('lowongan')
                        ->label('Pekerjaan')
                        ->icon('heroicon-m-briefcase')
                        ->url(fn ($record) => route('filament.hrd.resources.careers.view', $record->career_id)),
                ])
                ->icon('heroicon-o-ellipsis-horizontal-circle')
                ->tooltip('Mau ngambil tindakan?')
                ->color('goker-sangat-gelap'),
            ]);
    }
}
