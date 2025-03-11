<div>
    <x-nav-before></x-nav-before>
    <div class="w-full h-[580px] relative">
        <img class="w-full h-full" src="{{ asset('assets/images/detailBackground.png') }}" alt="">
        <div class="absolute top-[45%] left-[12%] text-white">
            <h1 class="title font-britHeavy text-5xl mb-3">{{ $career->name }}</h1>
            <h2 class="place font-britReg text-3xl">{{ $career->location }}</h2>
        </div>
    </div>

    <div
        class="flex md:flex-row flex-col gap-5 w-full md:gap-11 md:justify-center md:pl-0 pl-7 justify-start mt-[95px] mb-[150px]">

        <div class="flex flex-col gap-5 md:w-[45%] w-[100%] px-4 mr-[50px]">
            <div class="Description mb-5">
                <div class="mb-7">
                    <h1 class="font-mnbold">Tentang Peran:</h1>
                </div>
                <div>
                    {!! html_entity_decode($career->detail->Description) !!}
                </div>

            </div>
            <div class="Jobdesk mb-5">
                <div class="mb-7">
                    <h1 class="font-mnbold">Apa yang Anda akan lakukan:</h1>
                </div>
                <ul class="list-disc pl-6 font-mnbook">
                    {!! html_entity_decode($career->detail->Jobdesk) !!}
                </ul>
            </div>
            <div class="Requirement mb-5">
                <div class="mb-7">
                    <h1 class="font-mnbold">Apa yang Anda perlukan:</h1>
                </div>
                <ul class="list-disc pl-6 font-mnbook">
                    {!! html_entity_decode($career->detail->Requirement) !!}
                </ul>
            </div>
            <div class="AboutTeam mb-5">
                <div class="mb-7">
                    <h1 class="font-mnbold">Tentang tim ini:</h1>
                </div>
                <div>
                    {!! html_entity_decode($career->detail->AboutTeam) !!}
                </div>
            </div>
            <div class=" flex flex-col gap-2 text-gray-500">
                <p class="font-mnbold" style="font-size: 11px">#GOKERNOW</p>
                <p class="font-mnbold" style="font-size: 11px">#GOKER</p>
            </div>

        </div>
        <div class="w-[1.5px] h-auto bg-black">

        </div>

        <div class="md:w-[20%] w-full flex flex-col gap-2 md:justify-start justify-center items-center">
            @if (auth()->guard('user'))
                {{-- @if ($career->detail->DateEnd < now())
                    <a href="{{ route('career') }}"
                        class="p-2 bg-ijoGojek text-white text-center rounded-2xl font-britHeavy mb-3 hover:bg-kuningTuaGojek duration-200">Udah
                        telat nih Gokers. Cari yang aja lain yuk</a>
                @else --}}
                <form class="flex flex-col gap-1 justify-center md:justify-start w-[250px]"
                    wire:submit.prevent="submitCV">
                    <!-- Upload CV -->
                    <div class="mb-3">
                        <input type="file" wire:model="cv" class="w-full text-sm">
                        @error('cv')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Preview CV -->
                    @if ($cvPreviewUrl)
                        <div class="preview-container"
                            style="position: relative; width: 100%; max-width: 400px; margin-bottom: 20px;">

                            <embed class="rounded-2xl shadow-md border-1"
                                src="{{ asset('storage/' . $cvPreviewUrl) }}#toolbar=0" type="application/pdf"
                                width="100%" height="300px"></embed>
                            <button type="button"
                                class="bg-ijoGojek rounded-full text-white px-[6px] font-britHeavy hover:bg-red-600 duration-200"
                                wire:click="removeCv" style="position: absolute; top: 10px; right: 10px;">
                                X
                            </button>
                        </div>
                    @endif

                    <!-- Tombol Dinamis -->
                    <button type="submit" class="bg-ijoGojek font-britHeavy text-white py-2 rounded-2xl"
                        {{ !$uploaded ? 'disabled' : '' }}>
                        Kumpulkan CV
                    </button>
                </form>
                {{-- @endif --}}
            @else
                <a href="{{ route('login') }}"
                    class="p-2 bg-ijoGojek text-white text-center rounded-2xl font-britHeavy mb-3 hover:bg-kuningTuaGojek duration-200">Login
                    untuk dapat
                    bergabung
                    menjadi
                    Gokers!</a>
            @endif




            <!-- Pesan Flash -->
            @if (session()->has('message'))
                <div class="alert alert-success mt-3">{{ session('message') }}</div>
            @endif

            <div>
                <p class="text-[13px]">Tutup pendaftaran {{ $career->detail->DateEnd->format('d F Y') }}</p>
                <p class="text-[12px] text-gray-500">*S&K berlaku</p>
            </div>

            <div class="flex flex-col gap-2 justify-center mt-3">
                <img src="{{ asset('assets/images/img-detail.png') }}" alt="" class="rounded-xl w-auto">
                <div class="w-full flex justify-center">
                    <p style="text-align: center" class="text-[14px] w-[70%]">“Kata Juna, orang sukses bukan terlahir
                        tapi
                        terbuat”
                    </p>
                </div>
            </div>
        </div>


    </div>

    <x-footer></x-footer>
</div>
