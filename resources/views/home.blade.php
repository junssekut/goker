<x-html>

    <body class="bg-white z-auto">
        <x-nav-before></x-nav-before>

        <video class="absolute top-0 left-0 w-screen h-screen object-cover -z-10" autoplay muted loop>
            <source src="{{ asset('assets/videos/gojek-banner.webm') }}" type="video/mp4">
            Browser does not support the video tag.
        </video>

        <div
            class="flex flex-col justify-center h-screen justify-self-center sm:justify-self-auto sm:px-44 text-white text-3xl sm:text-4xl font-britHeavy leading-tight">
            <p>Seluruh Indonesia.</p>
            <p>Ribuan Peluang.</p>
            <p class="text-kuningGojek">1 Platform</p>
            <p>Solusi Cepat untuk</p>
            <p>Karier Impianmu</p>
        </div>

        <div class="relative">
            <h1 class="font-britBlack text-4xl sm:text-6xl w-full text-center pt-14 sm:pt-24 sm:pb-10">Tumbuh Bersama
                Gojek
            </h1>

            <div class="relative flex flex-col items-center md:flex-row sm:justify-evenly text-white">

                <x-home-card asset="assets/images/icon-helm.svg"
                    title="Gabung jadi bagian dari gojek, bangun kariermu sekarang!" color="#496D1C"
                    description="Bergabunglah dengan Gojek dan mulailah perjalanan karier Anda di perusahaan teknologi terkemuka, penuh peluang dan tantangan." />
                <x-home-card asset="assets/images/icon-shop.svg"
                    title="Gabung dengan Gojek, Buka Peluang Karier Tanpa Batas!" color="#741D50"
                    description="
Jadilah bagian dari Gojek dan wujudkan potensi terbaik Anda. Bersama kami, bangun masa depan yang penuh makna dan peluang tak terbatas." />
                <x-home-card asset="assets/images/icon-id-card.svg"
                    title="Gabung Gojek, Karier Cemerlang Dimulai di Sini!" color="#195D68"
                    description="Gojek adalah tempat di mana karier cemerlang dimulai. Dapatkan kesempatan untuk berkembang dan memberikan dampak positif." />
            </div>

        </div>

        <div>
            <div class="flex flex-col relative w-full h-[500px] md:h-[1000px]">
                <!-- Picture for the background image -->
                <picture class="absolute inset-0 z-0 w-full h-full">

                    <!-- Fallback for smaller screens (less than 768px), use the mobile image -->
                    <img src="{{ asset('assets/images/bg-mountain.svg') }}" alt="Mountain background"
                        class="w-full h-full object-cover object-[20%]">
                </picture>

                <!-- Content (above the background) -->
                <div class="flex flex-col sm:items-end items-center w-full font-britHeavy h-full">
                    <div
                        class="w-[418px] space-y-4 mx-10 md:mx-44 bg-transprent p-6 rounded-2xl bg-white/70 backdrop-blur-lg relative shadow-[4px_4px_8px_rgba(0,0,0,0.3)] mirror-effect">
                        <h1 class="text-5xl">
                            <span>Cari pekerjaan yang kamu inginkan</span>
                            <span class="text-ijoGojek"> secepat itu!</span>
                        </h1>
                        <ul class="space-y-3 list-disc pl-5">
                            <li>Akses lowongan pekerjaan yang tersedia dengan <span class="text-ijoGojek">satu
                                    klik</span></li>
                            <li>Respon application pendaftaran yang <span class="text-ijoGojek">cepat</span></li>
                            <li>Temukan pekerjaan yang sesuai <span class="text-ijoGojek">lokasi</span> atau <span
                                    class="text-ijoGojek">relevansi</span> yang diinginkan</li>
                            <li>Menjadikan proses pelamaran hingga diterima menjadi <span class="text-ijoGojek">lebih
                                    mudah</span></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div class="bg-footer">
            <h1 class="font-britBlack text-white text-4xl sm:text-5xl w-full text-center p-14">
                Teknologi kami mendukung Indonesia
            </h1>

            <div class="flex flex-col items-center gap-24 text-white pb-20">
                <x-home-promotion-card
                    title='Gabung dengan kami untuk menyokong para driver kami dengan aplikasi yang dapat diandalkan.'
                    color='#6CC24A' :button='false' asset='assets/images/card-gojek.svg' />
                <x-home-promotion-card title='Inovasi yang memajukan dengan memanfaatkan teknologi sekitar.'
                    color='#FF7F32' :button='false' asset='assets/images/card-dev.svg' />
                <x-home-promotion-card
                    title='Kami berdedikasi untuk menciptakan dampak sosial-ekonomi positif bagi ekosistem kami.'
                    color='#00AA13' :button='true' asset='assets/images/card-street.svg' />
            </div>

            <x-footer></x-footer>
    </body>
</x-html>
