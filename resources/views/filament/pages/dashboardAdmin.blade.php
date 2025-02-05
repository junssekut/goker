<x-filament::page>
    <div class="bg-inject bg-adminPanel"></div>

    {{-- {{ $this->form }} --}}

    <div class="flex flex-col gap-y-0">

        <div class="flex flex-row justify-start items-center p-3 rounded-xl shadow-lg text-white mb-8"
            style="background: linear-gradient(to top, #FFFFFF -40%, #78d172 50%, #01AB14 100%);">
            <img src="{{ asset('assets/images/adminLoginfoto.png') }}" alt="" srcset=""
                class="w-fit h-24 md:h-40 ml-10 mr-10">
            <div class="flex flex-col gap-2">
                <h1 class="text-3xl font-semibold">Beranda</h1>
                <p class="text-md w-11/12 line-clamp-3">Hei Admin Goker <span
                        class="font-semibold">{{ Auth::user()->name }}</span> Yuk mulai manage User dan HRD Goker!</p>
            </div>


        </div>


        <div class="flex w-full justify-start my-0">
            <x-filament::tabs label="Content tabs" class="mx-0">
                <x-filament::tabs.item :active="$tabs === 'User'" wire:click="setTab('User')">
                    <div class="flex justify-center items-center gap-2">
                        <ion-icon name="accessibility-outline" wire:ignore></ion-icon>

                        <h1 class=" pt-1">
                            User
                        </h1>
                    </div>

                </x-filament::tabs.item>

                <x-filament::tabs.item :active="$tabs === 'hrd'" wire:click="setTab('hrd')">
                    <div class="flex justify-center items-center gap-2">
                        <ion-icon name="document-outline" wire:ignore></ion-icon>

                        <h1 class=" pt-1">
                            HRD
                        </h1>
                    </div>
                </x-filament::tabs.item>
            </x-filament::tabs>

        </div>




        @if ($tabs === 'User')
            <div class="">
                @livewire(App\Filament\Admin\Resources\UserResource\Pages\ListUsers::class)

            </div>
        @elseif ($tabs === 'hrd')
            <div class="">

                @livewire(App\Filament\Admin\Resources\UserResource\Pages\ListUsers::class)

            </div>
        @endif

    </div>

    {{-- <div class="flex gap-4 flex-col md:flex-row hidden">
        <!-- Left Side: CareerStatus Stats -->
        <div class="">
            @livewire(App\Filament\Resources\CareerDetailResource\Widgets\CareerStatus::class)
        </div>

        <!-- Right Side: Table -->
        <div class="flex-1">
            @livewire(App\Filament\Widgets\CareerDetailTableWidget::class)
        </div>
    </div> --}}
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js" defer></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js" defer></script>
</x-filament::page>
