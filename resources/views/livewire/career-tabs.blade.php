<div>
    <!-- Tab buttons -->
    <div class="flex space-x-4 mb-4">
        <button wire:click="switchTab('pelamar')"
            class="px-4 py-2 rounded-lg {{ $activeTab === 'pelamar' ? 'bg-blue-500 text-white' : 'bg-gray-200 text-gray-700' }}">
            Pelamar
        </button>
        <button wire:click="switchTab('proses')"
            class="px-4 py-2 rounded-lg {{ $activeTab === 'proses' ? 'bg-blue-500 text-white' : 'bg-gray-200 text-gray-700' }}">
            Proses
        </button>
    </div>

    <!-- Tab content -->
    <div>
        @if ($activeTab === 'pelamar')
            <div class="shadow-md table-inject-lowongan-detail">
                @livewire(App\Filament\Resources\CareerDetailResource\Widgets\ApplicantTable::class, ['careerId' => $careerId])
            </div>
        @elseif($activeTab === 'proses')
            <div class="shadow-md table-inject-lowongan-detail">
                <!-- You can create another component for "Proses" or put the content here -->
                @livewire(App\Filament\Resources\CareerDetailResource\Widgets\ProcessTable::class, ['careerId' => $careerId])
            </div>
        @endif
    </div>
</div>
