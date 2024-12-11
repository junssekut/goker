<div>
    <x-nav-before></x-nav-before>
    <div class="w-full h-[580px] relative">
        <img class="w-full h-full" src="{{ asset('assets/images/detailBackground.png') }}" alt="">
        <div class="absolute top-[45%] left-[12%] text-white">
            <h1 class="title font-britHeavy text-5xl mb-3">Channel Business Development Manager</h1>
            <h2 class="place font-britReg text-3xl">Jakarta</h2>
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
                    <p>Sebagai Channel Business Development Manager, Anda akan bertanggung jawab untuk
                        menentukan proses guna mengembangkan hubungan jangka panjang dengan semua jenis mitra armada,
                        memimpin rekan kerja, dan melibatkan mitra armada guna menyediakan solusi Gojek yang paling
                        sesuai untuk membantu mereka mengembangkan bisnis. Tujuannya adalah untuk menghasilkan lebih
                        banyak pasokan kendaraan untuk GoCar (dalam hal SH dan # pengemudi/kendaraan).</p>
                </div>

            </div>
            <div class="Jobdesk mb-5">
                <div class="mb-7">
                    <h1 class="font-mnbold">Apa yang Anda akan lakukan:</h1>
                </div>
                <ul class="list-disc pl-6 font-mnbook">
                    <li> Memperoleh pemahaman mendalam dan kuat tentang kebutuhan/permasalahan bisnis mitra armada &
                        Gocar, sekaligus bertindak sebagai penasihat tepercaya bagi mereka untuk mempertahankan dan
                        mengembangkan bisnis mereka </li>
                    <li>Membuat jaringan kerja dan mendatangkan mitra armada baru ke dalam
                        ekosistem Gocar</li>
                    <li>Menemukan cara untuk memanfaatkan struktur Gojek yang ada (misalnya keterlibatan
                        pengemudi) untuk memberikan pengaruh terhadap SH/AR/CR/lokasi pengemudi </li>
                    <li>Mengembangkan rencana bisnis bersama secara menyeluruh, memantau kinerja mitra armada
                        dibandingkan target, menilai
                        tolok ukur kompetitif, dan mengantisipasi tantangan bisnis potensial</li>
                    <li> Mengambil tanggung jawab
                        atas semua layanan yang diberikan Gojek ke setiap akun, menjadi titik kontak tunggal dari Gojek
                        untuk upaya keterlibatan, penyampaian proyek & pemecahan masalah </li>

                    <li>Menyusun pedoman upaya ini dan
                        meningkatkan pengetahuan serta praktik terbaik Anda ke tim operasi</li>
                </ul>
            </div>
            <div class="Requirement mb-5">
                <div class="mb-7">
                    <h1 class="font-mnbold">Apa yang Anda perlukan:</h1>
                </div>
                <ul class="list-disc pl-6 font-mnbook">
                    <li>Minimal 6 tahun pengalaman kerja di sektor yang relevan, misalnya manajemen akun, konsultasi
                        manajemen, PMO di organisasi yang memiliki reputasi baik Ketajaman bisnis yang kuat (memiliki
                        pemahaman dasar
                        tentang P&L/laba rugi) M</li>
                    <li>Keterampilan pemecahan masalah dan
                        analisis yang sangat baik</li>
                    <li>Keterampilan komunikasi yang baik dalam Bahasa Indonesia (harus
                        dimiliki) dan Bahasa Inggris (lebih baik)</li>
                    <li>Kemampuan untuk memberikan hasil dan menutup kesepakatan/perjanjian yang
                        saling menguntungkan</li>
                    <li>Mampu mengartikulasikan pengetahuan dan wawasan ke dalam dokumen yang dapat
                        dimanfaatkan di seluruh organisasi </li>
                    <li>Pembelajar yang cepat, dapat bekerja dalam lingkungan yang
                        ambigu</li>
                </ul>
            </div>
            <div class="AboutTeam mb-5">
                <div class="mb-7">
                    <h1 class="font-mnbold">Tentang tim ini:</h1>
                </div>
                <div>
                    <p>Tim Manajemen Channel kami adalah kelompok kecil namun tangguh, bekerja bahu-membahu untuk
                        memastikan ekosistem armada kami berjalan lancar. Kami adalah tim yang erat, tumbuh melalui
                        kolaborasi, di mana setiap anggota membawa keahlian unik mereka ke meja. Baik itu dalam
                        bernegosiasi kemitraan, mengoptimalkan operasi, atau menjelajahi peluang pertumbuhan baru, kami
                        selalu siap menghadapi tantangan—dan melakukannya dengan semangat kesenangan dan kebersamaan.
                        Dengan budaya terbuka yang mendorong kreativitas dan pemikiran out-of-the-box, kami saling
                        mendukung di setiap langkah, menjadikan pekerjaan kami bermakna sekaligus menyenangkan.</p>
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
            @auth
                <form class="flex flex-col gap-1 justify-center md:justify-start w-[250px]" wire:submit.prevent="submitCV">
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

                            <embed class="rounded-2xl shadow-md border-1" src="{{ asset('storage/' . $cvPreviewUrl) }}"
                                type="application/pdf" width="100%" height="300px"></embed>
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
            @else
                <a href="{{ route('login') }}"
                    class="p-2 bg-ijoGojek text-white text-center rounded-2xl font-britHeavy mb-3 hover:bg-kuningTuaGojek duration-200">Login
                    untuk dapat
                    bergabung
                    menjadi
                    Gokers!</a>
            @endauth




            <!-- Pesan Flash -->
            @if (session()->has('message'))
                <div class="alert alert-success mt-3">{{ session('message') }}</div>
            @endif

            <div>
                <p class="text-[13px]">Tutup pendaftaran 20 November 2025</p>
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
