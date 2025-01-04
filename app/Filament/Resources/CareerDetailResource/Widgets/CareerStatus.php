<?php

namespace App\Filament\Resources\CareerDetailResource\Widgets;

use App\Filament\Resources\CareerDetailResource\Pages\ListCareerDetails;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\Concerns\InteractsWithPageTable;

class CareerStatus extends BaseWidget
{
    protected int | string | array $columnSpan = '1';

    use InteractsWithPageTable;

    protected static bool $isLazy = true;

    protected function getTablePage(): string
    {
        return ListCareerDetails::class;
    }

    protected static string $view = 'filament.widgets.career-status';

    public function getViewData(): array
    {
        return [
            'stats' => [
                [
                    'label' => 'CV Diterima',
                    'value' => $this->getPageTableQuery()->where('career_status', 'Applied')->count(),
                    'avatars' => $this->getAvatarsByGender('Applied')['avatars'],
                    'count' => $this->getAvatarsByGender('Applied')['count']
                ],
                [
                    'label' => 'Psikotes',
                    'value' => $this->getPageTableQuery()->where('career_status', 'Psychological Test')->count(),
                    'avatars' => $this->getAvatarsByGender('Psychological Test')['avatars'],
                    'count' => $this->getAvatarsByGender('Psychological Test')['count']
                ],
                [
                    'label' => 'Wawancara',
                    'value' => $this->getPageTableQuery()->where('career_status', 'Interview')->count(),
                    'avatars' => $this->getAvatarsByGender('Interview')['avatars'],
                    'count' => $this->getAvatarsByGender('Interview')['count']
                ],
                [
                    'label' => 'Kesehatan',
                    'value' => $this->getPageTableQuery()->where('career_status', 'MCU')->count(),
                    'avatars' => $this->getAvatarsByGender('MCU')['avatars'],
                    'count' => $this->getAvatarsByGender('MCU')['count']
                ],
                [
                    'label' => 'Diterima',
                    'value' => $this->getPageTableQuery()->where('career_status', 'Accepted')->count(),
                    'avatars' => $this->getAvatarsByGender('Accepted')['avatars'],
                    'count' => $this->getAvatarsByGender('Accepted')['count']
                ],
            ],
        ];
    }

    private function getAvatarsByGender(string $status): array
    {
        $avatars = $this->getPageTableQuery()
            ->where('career_status', $status)
            ->join('users', 'usercareer.user_id', '=', 'users.id') // Adjust table and column names
            ->join('user_profiles', 'users.id', '=', 'user_profiles.user_id')
            ->pluck('user_profiles.gender') // Fetch gender
            ->map(function ($gender) {
                return $gender === 'M' // Male
                    ? asset('assets/images/orang2.svg') // Male avatar
                    : asset('assets/images/orang1.svg'); // Female avatar
            })
             // Limit the number of avatars displayed
            ->toArray();

        return [
            'avatars' => $avatars,
            'count' => count($avatars),
        ];
    }
}
