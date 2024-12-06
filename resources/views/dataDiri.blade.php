<x-html>

    <body class="h-screen relative">

        <div class="bg-gradient-to-t from-biruGojek to-white flex justify-center relative h-full">
            <div class="absolute w-[20vw] h-[20vw] bg-gray-50 bg-opacity-30 rounded-full top-[26vh] left-[27vw]">
            </div>
            <div class="absolute w-[20vw] h-[20vw] bg-gray-50 bg-opacity-30 rounded-full top-[60vh] right-[27vw]">
            </div>

            <div class="latar pt-40 w-full flex justify-center h-[90%] max-h-[680px]">
                <div>
                    <form
                        class="isiKotak flex bg-ijoGojek max-w-auto h-auto rounded-3xl pb-2 gap-2 mx-9 relative shadow-[20px_20px_0_rgba(0,0,0,0.2)]"
                        wire:submit="submit">
                        <div id="form1" class="flex flex-col gap-2 relative z-10">
                            <div
                                class="font-britHeavy text-[23px] text-white flex px-7 h-auto pt-8 pb-2 justify-center items-center">
                                <p> Dua langkah menuju Gokers sejati </p>
                            </div>

                            <div class="input-box">
                                <div
                                    class="font-mnbold text-[12px] text-white flex w-full h-auto items-center pl-[35px] pb-1">
                                    <label for="nama">Nama Lengkap</label>
                                </div>

                                <div class="font-mnbold text-[12px] flex w-full h-auto justify-center">
                                    <input id="nama" type="text" wire:model.live="name" name="name"
                                        class="bg-kuningGojek w-[80%] h-[40px] rounded-3xl pl-[25px] placeholder-gray-500 font-mnbook"
                                        placeholder="Yuk yang lengkap Gokers!">
                                </div>
                                @error('name')
                                    <div class="font-mnbook text-white flex w-full h-[20px] items-center pl-[40px] pt-1">
                                        <p class="text-[12px] text-red-800">*Minimum 3 huruf</p>
                                    </div>
                                @enderror
                            </div>

                            <div class="input-box">
                                <div
                                    class="font-mnbold text-[12px] text-white flex w-full h-auto items-center pl-[35px] pb-1 pt-1">
                                    <label for="panggilan">Nama Panggilan</label>
                                </div>

                                <div class="font-mnbold text-[12px] flex w-full h-auto  justify-center">
                                    <input type="text" wire:model.live="panggilan" name="panggilan"
                                        class="bg-kuningGojek w-[80%] h-[40px] rounded-3xl pl-[25px] placeholder-gray-500 font-mnbook"
                                        placeholder="Siapa nih panggilan Gokers?" required>
                                </div>
                                @error('panggilan')
                                    <div class="font-mnbook text-white flex w-full h-[full] items-center pl-[40px]">
                                        <p class="text-[12px] text-red-800">*Minimum 3 huruf</p>
                                    </div>
                                @enderror
                            </div>

                            <div class="input-box">
                                <div
                                    class="font-mnbold text-[12px] text-white flex w-full h-auto items-center pl-[35px] pb-1 pt-1">
                                    <label for="lahir">Tempat & Tanggal Lahir</label>
                                </div>

                                <div class="font-mnbold text-[12px] flex w-full h-auto justify-center">
                                    <input type="text" wire:model.live="lahir" name="lahir"
                                        class="bg-kuningGojek w-[80%] h-[40px] rounded-3xl pl-[25px] placeholder-gray-500 font-mnbook"
                                        placeholder="Tempat-DD-MM-YYYY" required>
                                </div>
                                @error('lahir')
                                    <div class="font-mnbook text-white flex w-full h-[full] items-center pl-[40px]">
                                        <p class="text-[12px] text-red-800">*Tempat-DD-MM-YYYY</p>
                                    </div>
                                @enderror
                            </div>

                            <div>
                                <div
                                    class="font-mnbold text-[12px] text-white flex w-full h-auto items-center pl-[35px] pb-1 pt-1">
                                    <label for="kelamin">Jenis Kelamin</label>
                                </div>

                                <div class="gender-details flex justify-center h-auto relative">
                                    <!-- Placeholder -->
                                    <div id="pilihan"
                                        class="absolute left-16 top-3 text-gray-500 text-xs pointer-events-none transition-all">
                                        Goker cowo apa cewek?
                                    </div>

                                    <!-- Select Element -->
                                    <select id="jenis-kelamin" name="kelamin"
                                        class="w-[80%] p-2 rounded-3xl bg-kuningGojek appearance-none focus:ring-2 focus: focus:outline-black focus:border-black text-gray-700">
                                        <option value="" disabled selected hidden></option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Wanita">Perempuan</option>
                                    </select>

                                    <!-- Dropdown Arrow -->
                                    <div class="absolute right-16 top-2 text-gray-500 pointer-events-none">
                                        ▼
                                    </div>


                                    {{-- <div class="category w-full h-auto flex gap-3 ml-10">
                                                <div class="flex gap-3 items-center">
                                                    <input type="radio" name="gender" id="dot-1">
                                                    <label class="text-sm" for="dot-1 ">
                                                        <span class="dotOne"></span>
                                                        <span class="gender">Laki-laki</span>
                                                    </label>
                                                </div>
                
                                                <div class="flex gap-3 items-center">
                                                    <input type="radio" name="gender" id="dot-2">
                                                    <label class="text-sm" for="dot-2">
                                                        <span class="dotTwo"></span>
                                                        <span class="gender">Perempuan</span>
                                                    </label>
                                                </div>
                                            </div> --}}
                                </div>
                            </div>


                            <div>
                                <div
                                    class="font-mnbold text-[12px] text-white flex w-full h-auto items-center pl-[35px] pt-1">
                                    <label for="domisili">Domisili</label>
                                </div>

                                <div class="font-mnbold text-[12px] flex w-full h-auto justify-center">
                                    <input type="text" wire:model.live="domisili" name="domisili"
                                        class="bg-kuningGojek w-[80%] h-[40px] rounded-3xl pl-[25px] placeholder-gray-500 font-mnbook"
                                        placeholder="Gokers ga nomaden kan?" required>
                                </div>

                                @error('domisili')
                                    <div class="font-mnbook text-white flex w-full h-[full] items-center pl-[40px]">
                                        <p class="text-[12px] text-red-800">*minimum 4 huruf</p>
                                    </div>
                                @enderror
                            </div>


                            <div class="button h-auto pt-2 flex justify-center">

                                <button id="hideButton"
                                    class="bg-white font-mnbold w-[40%] h-10 py-3 px-8 flex items-center justify-start rounded-3xl hover:bg-[#F09A1F] duration-200 hover:text-white">
                                    Selanjutnya
                                </button>
                            </div>

                            <div class="button h-auto pr-6 flex text-white justify-end -translate-y-1">
                                <div class="font-mnbold text-xs w-auto h-auto flex items-start justify-end">
                                    <p>>> 1 of 2</p>
                                </div>
                            </div>
                        </div>

                        <div id="form2" class="flex-col relative z-10 gap-2">
                            <div
                                class="font-britHeavy text-[24px] text-white flex px-8 h-auto pt-8 pb-3 justify-center items-center">
                                <p> Selangkah menuju Gokers sejati </p>
                            </div>

                            {{-- --------------------------------------------------------------------------------------------------------------------------------------- --}}
                            <div class="input-box">
                                <div
                                    class="font-mnbold text-[12px] text-white flex w-full h-auto items-center pl-[35px] pb-1">
                                    <p>Jenjang Pendidikan Akhir</p>
                                </div>

                                <div class="flex justify-center h-auto relative">
                                    <!-- Placeholder -->
                                    <div id="pendidikan"
                                        class="absolute left-16 top-3 text-gray-500 text-xs pointer-events-none transition-all">
                                        <label for="">Gokers terakhir belajar apa?</label>
                                    </div>

                                    <!-- Select Element -->
                                    <select id="pendidikan" name="pendidikan"
                                        class="w-[80%] p-2 rounded-3xl bg-kuningGojek appearance-none focus:ring-2 focus: focus:outline-black focus:pl-3 text-gray-700">
                                        <option value="" disabled selected hidden></option>
                                        <option value="Laki-Laki">SMA/K</option>
                                        <option value="Wanita">S1</option>
                                        <option value="Wanita">S2</option>
                                        <option value="Wanita">S3</option>
                                    </select>

                                    <!-- Dropdown Arrow -->
                                    <div class="absolute right-16 top-2 text-gray-500 pointer-events-none">
                                        ▼
                                    </div>
                                </div>
                            </div>
                            {{-- --------------------------------------------------------------------------------------------------------------------------------------- --}}

                            <div class="input-box">
                                <div
                                    class="font-mnbold text-[12px] text-white flex w-full h-auto items-center pl-[35px] pb-1">
                                    <label for="sekolah">Nama Sekolah/ Perguruan Tinggi</label>
                                </div>

                                <div class="font-mnbold text-[12px] flex w-full h-auto justify-center">
                                    <input type="text" wire:model.live="sekolah" name="sekolah"
                                        class="bg-kuningGojek w-[80%] h-[40px] rounded-3xl pl-[25px] placeholder-gray-500 font-mnbook @error('sekolah') is-invalid @enderror"
                                        placeholder="Gokers terakhir sekolah dimana nih?" required minlength="3"
                                        maxlength="50">
                                </div>

                                @error('sekolah')
                                    <div class="font-mnbook text-white flex w-full h-[full] items-center pl-[40px]">
                                        <p class="text-[12px] text-red-800">*Minimum 4 huruf</p>
                                    </div>
                                @enderror
                            </div>

                            <div class="input-box">
                                <div
                                    class="font-mnbold text-[12px] text-white flex w-full h-auto items-center pl-[35px] pb-1">
                                    <label for="jurusan">Jurusan/ Program Studi</label>
                                </div>

                                <div class="font-mnbold text-[12px] flex w-full h-auto justify-center">
                                    <input type="text" wire:model.live="jurusan" name="jurusan"
                                        class="bg-kuningGojek w-[80%] h-[40px] rounded-3xl pl-[25px] placeholder-gray-500 font-mnbook"
                                        placeholder="Jurusan Gokers filsafat kuno ya?" required>
                                </div>

                                @error('jurusan')
                                    <div class="font-mnbook text-white flex w-full h-[full] items-center pl-[40px]">
                                        <p class="text-[12px] text-red-800">*Minimum 4 huruf</p>
                                    </div>
                                @enderror
                            </div>

                            <div class="input-box">
                                <div
                                    class="font-mnbold text-[12px] text-white flex w-full h-auto items-center pl-[35px] pb-1">
                                    <label for="pengalaman">Pengalaman Kerja</label>
                                </div>

                                <div class="font-mnbold text-[12px] flex w-full h-auto justify-center">
                                    <textarea class="bg-kuningGojek w-[80%] h-20 rounded-xl pl-4 pt-3 placeholder-gray-500 font-mnbook" name="pengalaman"
                                        placeholder="Gokers masih inget ga nih pengalamannya selama kerja? Kalo belom ada tulis pengalaman hidup aja."
                                        style="resize: none; overflow-wrap: break-word; white-space: pre-wrap;" required></textarea>
                                </div>
                            </div>

                            <div class="button h-auto pt-3 flex justify-center items-end">
                                <button id="hideButton" type="submit" name="submit"
                                    class="bg-white font-mnbold w-[40%] h-10 py-3 px-8 flex items-center justify-center rounded-3xl hover:bg-[#F09A1F] duration-200 hover:text-white">
                                    Simpan
                                </button>
                            </div>

                            <div class="button h-auto flex justify-end pr-6 pt-6 text-white items-start">
                                <div class="font-mnbold text-xs w-auto h-full flex items-center justify-end">
                                    <p>>> 2 of 2</p>
                                </div>
                            </div>
                        </div>


                    </form>
                </div>

            </div>
        </div>
        <div class="h-auto w-44 font-mnbold text-xs absolute bottom-0 right-0 pr-5 pb-5">
            <p class="text-white">Duh nanti aja deh! <a href="#" class="text-kuningGojek underline">Skip</a>
            </p>
        </div>
    </body>

    {{-- SCRIPT --}}


    <script defer>
        const nextButton = document.getElementById('hideButton');
        const form1 = document.getElementById('form1');
        const form2 = document.getElementById('form2');

        let formValid = true;

        // Listen for Livewire form validation
        Livewire.on('formValidated', () => {
            formValid = true; // Form sudah valid
        });

        nextButton.addEventListener('click', (event) => {
            if (!formValid) {
                event.preventDefault(); // Cegah aksi lanjut jika form tidak val
            } else if (formValid) {
                // Tampilkan form berikutnya
                form1.classList.add('hidden');
                form2.classList.remove('hidden');
                form2.classList.add('flex');
            }
        });

        $('#select-beast').selectize({
            create: true,
            sortField: {
                field: 'text',
                direction: 'asc'
            }
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const selectElement = document.getElementById('jenisPendidikan');
            const placeholderElement = document.getElementById('pendidikan');

            // Hide placeholder when an option is selected
            selectElement.addEventListener('change', () => {
                if (selectElement.value) {
                    placeholderElement.classList.add('hidden');
                } else {
                    placeholderElement.classList.remove('hidden');
                }
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const selectElement = document.getElementById('jenis-kelamin');
            const placeholderElement = document.getElementById('pilihan');

            // Hide placeholder when an option is selected
            selectElement.addEventListener('change', () => {
                if (selectElement.value) {
                    placeholderElement.classList.add('hidden');
                } else {
                    placeholderElement.classList.remove('hidden');
                }
            });
        });
    </script>
</x-html>
