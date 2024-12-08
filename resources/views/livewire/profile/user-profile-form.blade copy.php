<div class="bg-gradient-to-b from-white to-unguGojek h-100">
    <x-nav-before></x-nav-before>
    <div class="relative flex items-center justify-center h-screen">
        <div class="flex flex-col md:flex-row w-full max-w-6xl items-center justify-evenly md:mt-0">
            <div
                class="w-full mt-10 md:w-[50%] max-w-lg p-8 rounded-3xl bg-[#00AA13] flex flex-col items-center shadow-[20px_20px_0_rgba(0,0,0,0.2)]">
                <h2 class="text-xl text-center font-bold text-white mt-4 mb-6">
                    @if ($step == 1)
                        Dua langkah menuju Gokers sejati
                    @else
                        Selangkah menuju Gokers sejati
                    @endif
                </h2>

                <form wire:submit.prevent="{{ $step == 1 ? 'nextStep' : 'submitProfile' }}" class="w-full">
                    @csrf
                    <div class="flex flex-col gap-5">
                        <!-- Step 1 Fields -->
                        @if ($step == 1)
                            {{-- <div class="flex flex-row items-center w-full h-auto py-3 bg-[#F7CE55] rounded-full px-4">
                                <i class="text-[#DA8500] fas fa-user"></i>
                                <x-text-input wire:model="name" type="text" id="name"
                                    placeholder="Yuk yang lengkap, Gokers!" name="name"
                                    class="flex-1 bg-transparent outline-none text-[#C06100] placeholder-[#EF9334] ml-3" />
                            </div>
                            <x-input-error :messages="$errors->get('name')" /> --}}

                            <div class="flex flex-col gap-1 
                                {{ $errors->has('name') ? 'hint--error hint--top hint--fit hint--rounded hint--no-arrow hint--medium hint--bounce' : '' }}"
                                @if ($errors->has('name')) aria-label="{{ htmlspecialchars($errors->first('name'), ENT_QUOTES, 'UTF-8') }}" @endif>
                                <label for="name" class="text-l text-white font-mnbold">Nama Lengkap</label>
                                <div
                                    class="flex flex-row items-center w-full h-auto py-3 rounded-full px-4 
                                    {{ $errors->has('name') ? 'bg-red-100' : 'bg-[#F7CE55]' }}">
                                    <i class="text-[#DA8500] fas fa-user"></i>
                                    <x-text-input wire:model="name" type="text" id="name"
                                        placeholder="Yuk yang lengkap, Gokers!" name="name"
                                        class="flex-1 bg-transparent outline-none text-[#C06100] placeholder-[#EF9334] ml-3" />
                                </div>
                            </div>


                            <div class="flex flex-col gap-1 
    {{ $errors->has('nickname') ? 'hint--error hint--top hint--fit hint--rounded hint--no-arrow hint--medium hint--bounce' : '' }}"
                                @if ($errors->has('nickname')) aria-label="{{ htmlspecialchars($errors->first('nickname'), ENT_QUOTES, 'UTF-8') }}" @endif>
                                <label for="nickname" class="text-l text-white font-mnbold">Nama Panggilan</label>
                                <div
                                    class="flex flex-row items-center w-full h-auto py-3 rounded-full px-4 
        {{ $errors->has('nickname') ? 'bg-red-100 animate-error-shake' : 'bg-[#F7CE55]' }}">
                                    <i class="text-[#DA8500] fas fa-user"></i>
                                    <x-text-input wire:model="nickname" type="text" id="nickname"
                                        placeholder="Siapa nih panggilan Gokers?" name="nickname"
                                        class="flex-1 bg-transparent outline-none text-[#C06100] placeholder-[#EF9334] ml-3" />
                                </div>
                            </div>


                            <div class="flex flex-row gap-3"> <!-- Container for both inputs -->
                                <!-- Birth Place Input -->
                                <div class="flex flex-col gap-1
                                    {{ $errors->has('birth_place') ? 'hint--error hint--top hint--fit hint--rounded hint--no-arrow hint--medium hint--bounce' : '' }}"
                                    @if ($errors->has('birth_place')) aria-label="{{ htmlspecialchars($errors->first('birth_place'), ENT_QUOTES, 'UTF-8') }}" @endif>
                                    <label for="birth_place" class="text-l text-white font-mnbold">Tempat Lahir</label>
                                    <div
                                        class="flex flex-row items-center w-full h-auto py-3
                                        {{ $errors->has('birth_place') ? 'bg-red-100' : 'bg-[#F7CE55]' }} rounded-full px-4">
                                        <i class="text-[#DA8500] fas fa-map-marker-alt"></i>
                                        <x-text-input wire:model="birth_place" type="text" id="birth_place"
                                            name="birth_place" placeholder="Jakarta..."
                                            class="flex-1 bg-transparent outline-none text-[#C06100] placeholder-[#EF9334] ml-3" />
                                    </div>
                                </div>

                                <!-- Date of Birth Input -->
                                <div class="flex flex-col gap-1
                                    {{ $errors->has('dob') ? 'hint--error hint--top hint--fit hint--rounded hint--no-arrow hint--medium hint--bounce' : '' }}"
                                    @if ($errors->has('dob')) aria-label="{{ htmlspecialchars($errors->first('dob'), ENT_QUOTES, 'UTF-8') }}" @endif>
                                    <label for="dob" class="text-l text-white font-mnbold">Tanggal Lahir</label>
                                    <div
                                        class="flex flex-row items-center w-full h-auto py-3
                                        {{ $errors->has('dob') ? 'bg-red-100' : 'bg-[#F7CE55]' }} rounded-full px-4">
                                        <i class="text-[#DA8500] fas fa-birthday-cake"></i>
                                        <x-text-input wire:model="dob" type="date" id="dob" name="dob"
                                            class="flex-1 bg-transparent outline-none text-[#C06100] placeholder-[#EF9334] ml-3" />
                                    </div>
                                </div>
                            </div>


                            <div class="flex flex-col gap-1
    {{ $errors->has('gender') ? 'hint--error hint--top hint--fit hint--rounded hint--no-arrow hint--medium hint--bounce' : '' }}"
                                @if ($errors->has('gender')) aria-label="{{ htmlspecialchars($errors->first('gender'), ENT_QUOTES, 'UTF-8') }}" @endif>
                                <label for="gender" class="text-l text-white font-mnbold">Jenis Kelamin</label>
                                <div
                                    class="flex flex-row items-center w-full h-auto py-3 rounded-full px-4
        {{ $errors->has('gender') ? 'bg-red-100 animate-error-shake' : 'bg-[#F7CE55]' }}">
                                    <i class="text-[#DA8500] fas fa-transgender"></i>
                                    <select id="gender" name="gender" wire:model="gender"
                                        class=" bg-transparent text-[#C06100] placeholder-[#EF9334] ml-3 flex-1 outline-none">
                                        <option value="" selected hidden>Pilih Jenis Kelamin</option>
                                        <option value="M">Laki-Laki</option>
                                        <option value="F">Wanita</option>
                                    </select>
                                </div>
                            </div>

                            <div class="flex flex-col gap-1 
    {{ $errors->has('domicile') ? 'hint--error hint--top hint--fit hint--rounded hint--no-arrow hint--medium hint--bounce' : '' }}"
                                @if ($errors->has('domicile')) aria-label="{{ htmlspecialchars($errors->first('domicile'), ENT_QUOTES, 'UTF-8') }}" @endif>
                                <label for="domicile" class="text-l text-white font-mnbold">Domisili</label>
                                <div
                                    class="flex flex-row items-center w-full h-auto py-3 rounded-full px-4 
        {{ $errors->has('domicile') ? 'bg-red-100 animate-error-shake' : 'bg-[#F7CE55]' }}">
                                    <i class="text-[#DA8500] fas fa-map-marker-alt"></i>
                                    <x-text-input wire:model="domicile" type="text" id="domicile"
                                        placeholder="Gokers ga nomaden kan?" name="domicile"
                                        class="flex-1 bg-transparent outline-none text-[#C06100] placeholder-[#EF9334] ml-3" />
                                </div>
                            </div>
                        @else
                            <!-- Step 2 Fields -->
                            <div class="flex flex-col gap-1 
    {{ $errors->has('education_level') ? 'hint--error hint--top hint--fit hint--rounded hint--no-arrow hint--medium hint--bounce' : '' }}"
                                @if ($errors->has('education_level')) aria-label="{{ htmlspecialchars($errors->first('education_level'), ENT_QUOTES, 'UTF-8') }}" @endif>
                                <label for="education_level" class="text-l text-white font-mnbold">Pendidikan
                                    Terakhir</label>
                                <div
                                    class="flex flex-row items-center w-full h-auto py-3
        {{ $errors->has('education_level') ? 'bg-red-100' : 'bg-[#F7CE55]' }} rounded-full px-4">
                                    <i class="text-[#DA8500] fas fa-graduation-cap"></i>
                                    <select wire:model="education_level" id="education_level" name="education_level"
                                        class="flex-1 bg-transparent outline-none text-[#C06100] placeholder-[#EF9334] ml-3">
                                        <option value="">Pilih Pendidikan Terakhir</option>
                                        <option value="SMA / K">SMA / K</option>
                                        <option value="D3">D3</option>
                                        <option value="S1">S1</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                    </select>
                                </div>
                            </div>

                            <div class="flex flex-col gap-1 
    {{ $errors->has('school') ? 'hint--error hint--top hint--fit hint--rounded hint--no-arrow hint--medium hint--bounce' : '' }}"
                                @if ($errors->has('school')) aria-label="{{ htmlspecialchars($errors->first('school'), ENT_QUOTES, 'UTF-8') }}" @endif>
                                <label for="school" class="text-l text-white font-mnbold">Sekolah /
                                    Universitas</label>
                                <div
                                    class="flex flex-row items-center w-full h-auto py-3
        {{ $errors->has('school') ? 'bg-red-100' : 'bg-[#F7CE55]' }} rounded-full px-4">
                                    <i class="text-[#DA8500] fas fa-school"></i>
                                    <x-text-input wire:model="school" type="text" id="school"
                                        placeholder="Gokers lagi nempuh pendidikan di?" name="school"
                                        class="flex-1 bg-transparent outline-none text-[#C06100] placeholder-[#EF9334] ml-3" />
                                </div>
                            </div>

                            <div class="flex flex-col gap-1 
                            {{ $errors->has('major') ? 'hint--error hint--top hint--fit hint--rounded hint--no-arrow hint--medium hint--bounce' : '' }}"
                                @if ($errors->has('major')) aria-label="{{ htmlspecialchars($errors->first('major'), ENT_QUOTES, 'UTF-8') }}" @endif>
                                <label for="major" class="text-l text-white font-mnbold">Jurusan</label>
                                <div
                                    class="flex flex-row items-center w-full h-auto py-3
                                {{ $errors->has('major') ? 'bg-red-100' : 'bg-[#F7CE55]' }} rounded-full px-4">
                                    <i class="text-[#DA8500] fas fa-graduation-cap"></i>
                                    <x-text-input wire:model="major" type="text" id="major"
                                        placeholder="Jurusan Gokers filsafat kuno ya?" name="major"
                                        class="flex-1 bg-transparent outline-none text-[#C06100] placeholder-[#EF9334] ml-3" />
                                </div>
                            </div>

                            <div class="flex flex-col gap-1 
                            {{ $errors->has('experience') ? 'hint--error hint--top hint--fit hint--rounded hint--no-arrow hint--medium hint--bounce' : '' }}"
                                @if ($errors->has('experience')) aria-label="{{ htmlspecialchars($errors->first('experience'), ENT_QUOTES, 'UTF-8') }}" @endif>
                                <label for="experience" class="text-l text-white font-mnbold">Pengalaman Kerja</label>
                                <div
                                    class="flex flex-row items-center w-full h-auto py-3
                                {{ $errors->has('experience') ? 'bg-red-100' : 'bg-[#F7CE55]' }} rounded-full px-4">
                                    <i class="text-[#DA8500] fas fa-briefcase"></i>
                                    <x-text-input wire:model="experience" type="text" id="experience"
                                        placeholder="Ayo dong kasih tau kita, pengalaman Gokers dalam pekerjaan!"
                                        name="experience"
                                        class="flex-1 bg-transparent outline-none text-[#C06100] placeholder-[#EF9334] ml-3" />
                                </div>
                            </div>
                        @endif
                    </div>

                    <div class="mt-6">
                        <button type="submit"
                            class="w-full py-3 bg-white text-black font-medium rounded-full mb-4 duration-300 hover:bg-[#F09A1F] flex items-center justify-center hover:text-white">
                            @if ($step == 1)
                                Selanjutnya
                            @else
                                Simpan
                            @endif
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('livewire:load', function() {
        const selectElement = document.querySelector('#gender');
        const selectize = $(selectElement).selectize({
            create: false,
            sortField: 'text',
            onChange: function(value) {
                @this.set('gender', value); // Sync the value with Livewire
            }
        })[0].selectize;
    });
</script>
<script>
    document.addEventListener('livewire:load', function() {
        const selectElement = document.querySelector('#education_level');
        const selectize = $(selectElement).selectize({
            create: false,
            sortField: 'text',
            onChange: function(value) {
                @this.set('education_level', value); // Sync the value with Livewire
            }
        })[0].selectize;

        // If you want to preselect a value, set it like this
        // selectize.setValue(@this.gender || "");
    });
</script>
