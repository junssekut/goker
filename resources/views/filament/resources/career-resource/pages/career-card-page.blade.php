<x-filament::page>
    <div class="bg-inject bg-lowongan"></div>

    {{-- <div class="flex flex-col border bg-white p-6">
        {{ $this->form }}
    </div> --}}

    <div class="flex flex-col">

        <div class="flex flex-row justify-center items-center p-6 rounded-xl shadow-lg text-white"
            style="background: linear-gradient(to top, #FFFFFF -40%, #C75FC1 50%, #92138C 100%);">
            <div class="flex flex-col gap-2">
                <h1 class="text-3xl font-semibold">Lowongan</h1>
                <p class="text-md w-11/12 line-clamp-3">Di halaman ini kamu bisa nge-akses lowongan-lowongan pekerjaan
                    yang udah dipublish nih! Banyak detail lainnya yang harus kamu lihat ya!, tambahin lowongan baru
                    dengan klik tombol dibawah!</p>

                {{-- <button wire:click="create"
                    class="flex flex-row items-center gap-2 p-2 h-8 w-fit text-white bg-[#01AB14] hover:bg-[#2B9437] rounded-md transition-all ease-linear">
                    <x-heroicon-o-plus class="w-5 h-5" />
                    Tambah Lowongan
                </button> --}}
            </div>

            <img src="{{ asset('assets/images/lowongan.svg') }}" alt="" srcset="" class="w-fit h-24 md:h-40">
        </div>

    </div>

    <div class="flex">
        <div class="flex flex-row w-full gap-4">
            <div class="flex justify-center items-center border shadow-lg bg-white p-4 rounded-xl">
                <x-heroicon-o-briefcase class="w-8 h-8" />
            </div>

            <div class="flex flex-row w-full justify-between">
                <div class="flex flex-col justify-center">
                    <h2 class="text-xl font-bold text-white ">Pekerjaan
                    </h2>
                    <p class="text-gray-300">Berikan peluang yang terbaik untuk mereka, dan perusahaan ya!</p>
                </div>

                {{-- <button class=""> --}}
                {{-- <x-heroicon-o-plus class="w-5 h-5" />
                    Tambah Lowongan
                </button> --}}

                <x-filament::modal width="7xl" :close-by-clicking-away="false" id="create" :close-button="true">
                    <x-slot name="heading">
                        <h2 class="text-[#01AB14]">Masukkan informasi lowongan yang baik dan benar ya, Yuk!</h2>
                    </x-slot>

                    <x-slot name="trigger">
                        <button
                            class="flex flex-row items-center gap-2 p-2 h-fit w-fit md:h-8 md:w-48 text-white bg-[#01AB14] hover:bg-[#2B9437] rounded-md transition-all ease-linear">
                            <x-heroicon-o-plus class="w-5 h-5" />
                            Tambah Lowongan
                        </button>
                    </x-slot>

                    {{ $this->form }}
                </x-filament::modal>
            </div>
        </div>
    </div>

    <!-- Modal Overlay -->
    <!-- Modal Overlay -->
    <!-- Modal Overlay -->
    {{-- @if ($isCreateModalOpen)
        <div class="fixed inset-0 flex items-center justify-center md:justify-end z-50 bg-[#656565] bg-opacity-70">
            @livewire('notifications')
            <div class="bg-white rounded-xl shadow-xl md:w-[680px] p-6 absolute md:top-16 md:right-10">
                <!-- Modal Header -->
                <div class="flex justify-between items-center border-b pb-2 mb-4">
                    <h3 class="text-2xl font-bold">Tambah Lowongan</h3>
                    <button wire:click="$set('isCreateModalOpen', false)" class="text-gray-500 hover:text-gray-700">
                        <x-heroicon-o-x-mark class="w-6 h-6" />
                    </button>
                </div>

                <!-- Modal Body -->
                <form wire:submit.prevent="save" class="space-y-4">
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Nama Pekerjaan</label>
                            <x-filament::input.wrapper :valid="!$errors->has('data.name')" suffix-icon="heroicon-m-briefcase"
                                suffix-icon-color="{{ !$errors->has('data.name') ? 'goker-gelap' : 'danger' }}">
                                <x-filament::input type="text" wire:model.lazy="data.name" id="name" />
                            </x-filament::input.wrapper>
                        </div>

                        <div>
                            <label for="category" class="block text-sm font-medium text-gray-700">Jenis
                                Pekerjaan</label>

                            <x-filament::input.wrapper :valid="!$errors->has('data.category')" suffix-icon="heroicon-m-bookmark"
                                suffix-icon-color="{{ !$errors->has('data.category') ? 'goker-gelap' : 'danger' }}">
                                <x-filament::input.select wire:model.lazy="data.category">
                                    <option value="" disabled>Kategori Pekerjaan</option>
                                    <option value="Design">Design</option>
                                    <option value="Financial and Accounting">Financial and Accounting</option>
                                    <option value="Marketing and Branding">Marketing and Branding</option>
                                    <option value="Development">Development</option>
                                </x-filament::input.select>
                            </x-filament::input.wrapper>
                        </div>
                    </div>

                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700">Deskripsi
                            Pekerjaan</label>
                        <textarea wire:model="data.description" id="description" rows="3"
                            class="w-full border-gray-300 rounded-md shadow-sm focus:ring-[#01AB14] focus:border-[#01AB14]"></textarea>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="location" class="block text-sm font-medium text-gray-700">Lokasi
                                Pekerjaan</label>
                            <textarea wire:model="data.location" id="location" rows="1"
                                class="w-full border-gray-300 rounded-md shadow-sm focus:ring-[#01AB14] focus:border-[#01AB14]"></textarea>
                        </div>
                        <div>
                            <label for="deadline" class="block text-sm font-medium text-gray-700">Tenggat
                                Lowongan</label>
                            <input wire:model="data.deadline" type="date" id="deadline"
                                class="w-full border-gray-300 rounded-md shadow-sm focus:ring-[#01AB14] focus:border-[#01AB14]">
                        </div>
                    </div>

                    <div class="flex flex-col gap-4">
                        <div class="flex flex-col">
                            <p class="text-sm font-medium text-gray-700">Metode Pelaksanaan</p>
                            <div class="flex flex-row gap-4">
                                <label class="flex items-center gap-2 mt-1">
                                    <input type="radio" wire:model="data.method" value="onsite"
                                        class="text-[#01AB14] focus:ring-[#01AB14] focus:outline-none checked:ring-[#01AB14]">
                                    <span class="font-semibold">Onsite</span>
                                </label>
                                <label class="flex items-center gap-2 mt-1">
                                    <input type="radio" wire:model="data.method" value="remote"
                                        class="text-[#01AB14] focus:ring-[#01AB14] focus:outline-none checked:ring-[#01AB14]">
                                    <span class="font-semibold">Remote</span>
                                </label>
                            </div>
                        </div>

                        <div class="flex flex-col">
                            <p class="text-sm font-medium text-gray-700">Status Pekerjaan</p>
                            <div class="flex flex-row gap-4">
                                <label class="flex items-center gap-2 mt-1">
                                    <input type="radio" wire:model="data.status" value="full-time"
                                        class="text-[#01AB14] focus:ring-[#01AB14] focus:outline-none checked:ring-[#01AB14]">
                                    <span class="font-semibold">Full Time</span>
                                </label>
                                <label class="flex items-center gap-2 mt-1">
                                    <input type="radio" wire:model="data.status" value="part-time"
                                        class="text-[#01AB14] focus:ring-[#01AB14] focus:outline-none checked:ring-[#01AB14]">
                                    <span class="font-semibold">Part Time</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Footer -->
                    <div class="flex justify-end gap-2 border-t pt-4 mt-4">
                        <button wire:click="$set('isCreateModalOpen', false)"
                            class="px-4 py-2 bg-[#9E4546] text-[#F99C9E] rounded-md hover:bg-[#5A0A0A] hover:bg-opacity-30 transition-all ease-linear">
                            Batal
                        </button>
                        <button type="submit"
                            class="px-4 py-2 bg-[#457C9E] text-[#9CCBF9] rounded-md hover:bg-[#0B2C42] transition-all ease-linear">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    @endif --}}



    <div class="min-h-screen">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 auto-rows-fr">
            @foreach ($records as $record)
                <a href="{{ route('filament.hrd.resources.careers.view', $record->id) }}"
                    class="group block hover:shadow-lg transition-shadow duration-300">
                    <div
                        class="flex flex-col bg-white rounded-xl shadow-md p-4 gap-2 h-full border border-gray-200 hover:border-[#00AA13] transition-colors duration-300">
                        <!-- Card Content Wrapper -->
                        <div class="flex flex-col flex-grow">
                            <!-- Expiry Date -->
                            <div class="flex p-2 border w-fit border-[#C7C7C7] rounded-lg bg-gray-50">
                                <p class="text-sm text-[#6B6B6B]">
                                    Berakhir hingga:
                                    <span class="font-bold text-black">
                                        {{ $record->detail?->DateEnd ? date('Y-m-d', strtotime($record->detail->DateEnd)) : 'N/A' }}
                                    </span>
                                </p>
                            </div>

                            <!-- Job Title -->
                            <h2
                                class="text-xl font-semibold group-hover:text-[#00AA13] transition-colors duration-300 mt-2">
                                {{ $record->name }}
                            </h2>

                            <!-- Brief Description -->
                            <p class="text-[#6B6B6B] text-sm mt-2 line-clamp-3 flex-grow">
                                {{ $record->briefDescription }}
                            </p>
                        </div>

                        <!-- Footer Section (Aligned at the bottom) -->
                        <div class="flex flex-wrap gap-2 mt-auto pt-2 border-t border-gray-100">
                            {{-- {{ dd($record) }} --}}
                            <span
                                class="flex flex-row justify-center items-center border-2 px-2 py-1 text-sm rounded gap-2 font-medium
    @if ($record->category && $record->category->category_name === 'Design') bg-blue-100 text-blue-800 border-blue-300
    @elseif($record->category && $record->category->category_name === 'Financial and Accounting') bg-yellow-100 text-yellow-800 border-yellow-300
    @elseif($record->category && $record->category->category_name === 'Marketing and Branding') bg-green-100 text-green-800 border-green-300
    @elseif($record->category && $record->category->category_name === 'Development') bg-purple-100 text-purple-800 border-purple-300
    @else bg-red-100 text-red-800 border-red-300 @endif">
                                @if ($record->category->category_name === 'Design')
                                    <x-heroicon-o-paint-brush class="w-4 h-4" />
                                @elseif ($record->category->category_name === 'Financial and Accounting')
                                    <x-heroicon-o-currency-dollar class="w-4 h-4" />
                                @elseif ($record->category->category_name === 'Marketing and Branding')
                                    <x-heroicon-o-megaphone class="w-4 h-4" />
                                @elseif ($record->category->category_name === 'Development')
                                    <x-heroicon-o-code-bracket class="w-4 h-4" />
                                @else
                                    <x-heroicon-o-information-circle class="w-4 h-4" />
                                @endif

                                {{ $record->category->category_name }}
                            </span>

                            <span class="border-2 px-2 py-1 text-sm rounded">{{ $record->status }}</span>
                            <span class="border-2 px-2 py-1 text-sm rounded">{{ $record->method }}</span>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

</x-filament::page>
