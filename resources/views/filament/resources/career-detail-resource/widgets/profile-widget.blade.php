<div class="p-4 rounded-xl shadow-lg"
    style="background: linear-gradient(to top, #FFFFFF -40%, #FEA500 30%, #FF6E01 100%);">
    <div class="flex flex-row gap-4">
        {{-- Profile --}}
        <div class="flex items-center">
            {{-- <img src="{{ $record->avatar_url ?? 'https://i.pravatar.cc/50' }}" alt="Avatar"
                class="w-16 h-16 rounded-full"> --}}
            <x-filament::avatar
                src="{{ $record->profile->gender === 'M' ? asset('assets/images/orang2.svg') : asset('assets/images/orang2.svg') }}"
                alt='{{ $record->name }}' :circular="true" size="2xl" class="shadow-md" />
        </div>

        {{-- <div class="border-r-2 border-white"></div> --}}

        <div class="flex flex-row w-full justify-between">
            <div class="flex flex-col w-full gap-1">
                <div class="flex flex-row gap-2">
                    <h3 class="text-lg font-bold text-black">{{ $record->profile?->name }}</h3>
                    <x-filament::badge :color="match ($record->career_status) {
                        'Applied' => 'status-applied',
                        'Psychological Test' => 'status-psychological-test',
                        'Interview' => 'status-interview',
                        'MCU' => 'status-mcu',
                        'Accepted' => 'status-accepted',
                        default => 'danger',
                    }" class="rounded-xl shadow-md px-4 py-0">
                        {{ $record->career_status }}
                    </x-filament::badge>
                </div>
                <p class="text-sm text-gray-600">{{ $record->career?->name }}</p>
            </div>

            <div class="flex flex-row gap-2">
                <x-filament::button href="{{ route('career.downloadCv', ['record' => $record]) }}" tag="a"
                    color="primary" class="rounded-xl shadow-md text-center" icon="heroicon-m-arrow-down-tray"
                    size="sm" icon-position="after">
                    Download CV Pelamar
                </x-filament::button>
                <x-filament::button wire:click="deleteRecord" color="danger" class="rounded-xl shadow-md"
                    icon="heroicon-m-x-circle" size="sm" icon-position="after">
                    Hapus Lamaran
                </x-filament::button>
            </div>
        </div>
    </div>
</div>
