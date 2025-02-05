<x-filament::page>
    <div class="bg-inject bg-beranda"></div>

    {{ $this->form }}

    <div class="flex flex-col">

        <div class="flex flex-row justify-center items-center p-6 rounded-xl shadow-lg text-white"
            style="background: linear-gradient(to top, #FFFFFF -40%, #FEA500 50%, #FF6E01 100%);">
            <div class="flex flex-col gap-2">
                <h1 class="text-3xl font-semibold">Beranda</h1>
                <p class="text-md w-11/12 line-clamp-3">Rekan HRD <span
                        class="font-semibold">{{ Auth::user()->name }}</span>, Kamu
                    udah ga sabar
                    ya buat
                    liat
                    siapa
                    aja yang
                    udah melamar di goker? Lihat informasinya dibawah ya! Mereka orang-orang yang nungguin respon kamu
                    tuh.</p>
            </div>

            <img src="{{ asset('assets/images/logo-hrd.png') }}" alt="" srcset="" class="w-fit h-24 md:h-40">
        </div>

    </div>

    <div class="flex gap-4 flex-col md:flex-row">
        <!-- Left Side: CareerStatus Stats -->
        <div class="">
            @livewire(App\Filament\Resources\CareerDetailResource\Widgets\CareerStatus::class)
        </div>

        <!-- Right Side: Table -->
        <div class="flex-1">
            @livewire(App\Filament\Widgets\CareerDetailTableWidget::class)
        </div>
    </div>

</x-filament::page>
