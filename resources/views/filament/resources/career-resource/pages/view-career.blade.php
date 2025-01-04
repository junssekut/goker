{{-- resources/views/filament/pages/view-career.blade.php --}}

<x-filament::page>
    @livewire('notifications')

    <x-filament::breadcrumbs :breadcrumbs="$this->getBreadcrumbs()" />

    <div class="bg-inject bg-lowongan-detail"></div>

    <div class="flex flex-col">

        <div class="flex flex-row justify-between items-center p-6 rounded-xl shadow-lg text-white"
            style="background: linear-gradient(to top, #FFFFFF -40%, #4CB9D2 50%, #00ADD6 100%);">
            <div class="flex flex-col gap-2">
                <h1 class="text-3xl font-semibold">{{ $record->name }}</h1>
                <p class="text-md line-clamp-3">{{ $record->briefDescription }}</p>
            </div>

            <img src="{{ asset('assets/images/latar.svg') }}" alt="" srcset="" class="w-56 h-56">
        </div>

    </div>

    <div class="tab-inject-lowongan-detail">
        <x-filament::tabs label="Content tabs">
            <x-filament::tabs.item :active="$activeTab === 'pelamar'" wire:click="$set('activeTab', 'pelamar')" icon="heroicon-m-user">
                Pelamar
            </x-filament::tabs.item>

            <!-- Tab 2 -->
            <x-filament::tabs.item :active="$activeTab === 'proses'" wire:click="$set('activeTab', 'proses')"
                icon="heroicon-m-document-text">
                Proses
            </x-filament::tabs.item>
        </x-filament::tabs>

        <!-- Tab 1 Content -->
        @if ($activeTab === 'pelamar')
            <div class="shadow-md table-inject-lowongan-detail mt-6">
                @livewire(App\Filament\Resources\CareerDetailResource\Widgets\ApplicantTable::class, ['careerId' => $record->id])
            </div>
        @endif

        <!-- Tab 2 Content -->
        @if ($activeTab === 'proses')
            <div class="table-inject-lowongan-detail">
                <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                    @foreach ($records as $status => $recordGroup)
                        <div class="flex flex-col gap-4">
                            <!-- Dynamically set the badge color based on the status -->
                            <x-filament::badge :color="match ($status) {
                                'Applied' => 'status-applied',
                                'Psychological Test' => 'status-psychological-test',
                                'Interview' => 'status-interview',
                                'MCU' => 'status-mcu',
                                'Accepted' => 'status-accepted',
                                default => 'danger',
                            }" class="w-full">
                                <div class="flex items-center justify-between gap-2">
                                    <p class="">{{ $status }}</p>
                                    <x-filament::badge :color="match ($status) {
                                        'Applied' => 'status-applied',
                                        'Psychological Test' => 'status-psychological-test',
                                        'Interview' => 'status-interview',
                                        'MCU' => 'status-mcu',
                                        'Accepted' => 'status-accepted',
                                        default => 'danger',
                                    }"
                                        class="">{{ $recordGroup->count() }}</x-filament::badge>
                                </div>
                            </x-filament::badge>

                            <!-- Loop through the records of each status -->
                            @foreach ($recordGroup as $record)
                                <a href="{{ route('filament.hrd.resources.career-details.view', $record) }}"
                                    class="group block hover:shadow-lg transition-shadow duration-300">
                                    <div
                                        class="card bg-white border shadow-lg rounded-lg p-4 hover:border-[#00AA13] transition-colors duration-300">
                                        <div class="flex flex-row card-header border-b-2 gap-4 py-2 mb-2">
                                            <img src="{{ asset('assets/images/orang1.svg') }}" alt=""
                                                srcset="" class="w-12 h-12">

                                            <div class="flex flex-col">
                                                <h5 class="group-hover:text-[#00AA13] transition-colors duration-300">
                                                    {{ $record->user->profile->name }}</h5>
                                                <p class="text-sm text-[#747474]">{{ $record->user->email }}</p>
                                            </div>
                                        </div>

                                        <div class="flex flex-row justify-between">
                                            <img src="{{ asset('assets/images/goker-text.svg') }}" alt="" class="w-16">
                                        
                                            <x-filament::badge :color="match (true) {
                                                $status === 'Applied' && $record->score >= 80 => 'success',
                                                $status === 'Applied' && $record->score >= 50 => 'warning',
                                                $status === 'Applied' => 'danger',
                                                $status === 'Psychological Test' && $record->psychological_test_score >= 80 => 'success',
                                                $status === 'Psychological Test' && $record->psychological_test_score >= 50 => 'warning',
                                                $status === 'Psychological Test' => 'danger',
                                                $status === 'Interview' && $record->interview_score >= 80 => 'success',
                                                $status === 'Interview' && $record->interview_score >= 50 => 'warning',
                                                $status === 'Interview' => 'danger',
                                                $status === 'MCU' && $record->mcu_score >= 80 => 'success',
                                                $status === 'MCU' && $record->mcu_score >= 50 => 'warning',
                                                $status === 'MCU' => 'danger',
                                                default => 'secondary',
                                            }" class="">
                                                @php
                                                    $score = match ($status) {
                                                        'Applied' => $record->score,
                                                        'Psychological Test' => $record->psychological_test_score,
                                                        'Interview' => $record->interview_score,
                                                        'MCU' => $record->mcu_score,
                                                        default => null,
                                                    };
                                                @endphp
                                        
                                            <p class="text-lg">
                                                @if ($score === null)
                                                    <x-heroicon-m-x-mark class="w-4 h-4" />
                                                @else
                                                    {{ round($score) }}%
                                                @endif
                                            </p>
                                            </x-filament::badge>
                                        </div>
                                        
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>

</x-filament::page>
