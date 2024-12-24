<?php if (isset($component)) { $__componentOriginal4018a8584a4cc12cea6bc8c2c3d4c53e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4018a8584a4cc12cea6bc8c2c3d4c53e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.html','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('html'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

    <body class="bg-white z-auto">
        <?php if (isset($component)) { $__componentOriginala8160e11c9697e102943c639baed6e09 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala8160e11c9697e102943c639baed6e09 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.nav-before','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('nav-before'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala8160e11c9697e102943c639baed6e09)): ?>
<?php $attributes = $__attributesOriginala8160e11c9697e102943c639baed6e09; ?>
<?php unset($__attributesOriginala8160e11c9697e102943c639baed6e09); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala8160e11c9697e102943c639baed6e09)): ?>
<?php $component = $__componentOriginala8160e11c9697e102943c639baed6e09; ?>
<?php unset($__componentOriginala8160e11c9697e102943c639baed6e09); ?>
<?php endif; ?>

        <video class="absolute top-0 left-0 w-screen h-screen object-cover -z-10" autoplay muted loop>
            <source src="<?php echo e(asset('assets/videos/gojek-banner.webm')); ?>" type="video/mp4">
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

        <div class="relative overflow-hidden">
            <h1 class="font-britBlack text-4xl sm:text-6xl w-full text-center pt-14 sm:pt-24 sm:pb-10">Tumbuh Bersama
                Gojek
            </h1>
            <div class="absolute w-96 h-96 bg-green-500 bg-opacity-20 rounded-full bottom-[0vh] left-[40vw] z-[-2]">
            </div>
            <div
                class="absolute w-[324px] h-[326px] bg-[#F1D581] bg-opacity-50 rounded-full bottom-[20vh] left-[22vw] md:left-[42vw] z-[-2]">
            </div>
            <div
                class="absolute w-[404px] h-[396px] bg-green-500 bg-opacity-20 rounded-full top-[90vh] md:top-[-5vh] right-[-5vw] z-[-2]">
            </div>
            <div
                class="absolute w-[324px] h-[326px] bg-[#F1D581] bg-opacity-50 rounded-full top-[85vh] md:top-[20vh] right-[20vw] md:right-[5vw] z-[-2]">
            </div>
            <div
                class="absolute w-[404px] h-[396px] bg-green-500 bg-opacity-20 rounded-full top-[15vh] left-[0vw] z-[-2]">
            </div>
            <div
                class="absolute w-[324px] h-[326px] bg-[#F1D581] bg-opacity-50 rounded-full top-[5vh] left-[15vw] z-[-2]">
            </div>

            <div class="relative flex flex-col items-center md:flex-row sm:justify-evenly text-white">
                <?php if (isset($component)) { $__componentOriginal33e5a41fe85a6da531869dc1bab900a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal33e5a41fe85a6da531869dc1bab900a8 = $attributes; } ?>
<?php $component = App\View\Components\HomeCard::resolve(['asset' => 'assets/images/icon-helm.svg','title' => 'Gabung jadi bagian dari gojek, bangun kariermu sekarang!','color' => '#496D1C','description' => 'Bergabunglah dengan Gojek dan mulailah perjalanan karier Anda di perusahaan teknologi terkemuka, penuh peluang dan tantangan.'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('home-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\HomeCard::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal33e5a41fe85a6da531869dc1bab900a8)): ?>
<?php $attributes = $__attributesOriginal33e5a41fe85a6da531869dc1bab900a8; ?>
<?php unset($__attributesOriginal33e5a41fe85a6da531869dc1bab900a8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal33e5a41fe85a6da531869dc1bab900a8)): ?>
<?php $component = $__componentOriginal33e5a41fe85a6da531869dc1bab900a8; ?>
<?php unset($__componentOriginal33e5a41fe85a6da531869dc1bab900a8); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal33e5a41fe85a6da531869dc1bab900a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal33e5a41fe85a6da531869dc1bab900a8 = $attributes; } ?>
<?php $component = App\View\Components\HomeCard::resolve(['asset' => 'assets/images/icon-shop.svg','title' => 'Gabung dengan Gojek, Buka Peluang Karier Tanpa Batas!','color' => '#741D50','description' => '
Jadilah bagian dari Gojek dan wujudkan potensi terbaik Anda. Bersama kami, bangun masa depan yang penuh makna dan peluang tak terbatas.'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('home-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\HomeCard::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal33e5a41fe85a6da531869dc1bab900a8)): ?>
<?php $attributes = $__attributesOriginal33e5a41fe85a6da531869dc1bab900a8; ?>
<?php unset($__attributesOriginal33e5a41fe85a6da531869dc1bab900a8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal33e5a41fe85a6da531869dc1bab900a8)): ?>
<?php $component = $__componentOriginal33e5a41fe85a6da531869dc1bab900a8; ?>
<?php unset($__componentOriginal33e5a41fe85a6da531869dc1bab900a8); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal33e5a41fe85a6da531869dc1bab900a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal33e5a41fe85a6da531869dc1bab900a8 = $attributes; } ?>
<?php $component = App\View\Components\HomeCard::resolve(['asset' => 'assets/images/icon-id-card.svg','title' => 'Gabung Gojek, Karier Cemerlang Dimulai di Sini!','color' => '#195D68','description' => 'Gojek adalah tempat di mana karier cemerlang dimulai. Dapatkan kesempatan untuk berkembang dan memberikan dampak positif.'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('home-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\HomeCard::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal33e5a41fe85a6da531869dc1bab900a8)): ?>
<?php $attributes = $__attributesOriginal33e5a41fe85a6da531869dc1bab900a8; ?>
<?php unset($__attributesOriginal33e5a41fe85a6da531869dc1bab900a8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal33e5a41fe85a6da531869dc1bab900a8)): ?>
<?php $component = $__componentOriginal33e5a41fe85a6da531869dc1bab900a8; ?>
<?php unset($__componentOriginal33e5a41fe85a6da531869dc1bab900a8); ?>
<?php endif; ?>
            </div>

        </div>

        <div>
            <div class="flex flex-col relative w-full h-[500px] md:h-[1000px]">
                <!-- Picture for the background image -->
                <picture class="absolute inset-0 z-0 w-full h-full">

                    <!-- Fallback for smaller screens (less than 768px), use the mobile image -->
                    <img src="<?php echo e(asset('assets/images/bg-mountain.svg')); ?>" alt="Mountain background"
                        class="w-full h-full object-cover object-[20%]">
                </picture>

                <!-- Content (above the background) -->
                <div class="flex flex-col sm:items-end items-center w-full font-britHeavy h-full">
                    <div
                        class="w-[418px] md:w-[500px] space-y-4 mx-10 md:mx-44 bg-transprent p-6 rounded-2xl bg-white/70 md:bg-none backdrop-blur-lg md:backdrop-filter-none relative shadow-[4px_4px_8px_rgba(0,0,0,0.3)] md:shadow-none mirror-effect">
                        <h1 class="text-5xl">
                            <span>Cari pekerjaan yang kamu inginkan</span>
                            <span class="text-ijoGojek"> secepat itu!</span>
                        </h1>
                        <ul class="space-y-3 list-disc pl-5 md:text-lg">
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
                <?php if (isset($component)) { $__componentOriginal5edc7779be57795a4d82409adcbb9457 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5edc7779be57795a4d82409adcbb9457 = $attributes; } ?>
<?php $component = App\View\Components\HomePromotionCard::resolve(['title' => 'Gabung dengan kami untuk menyokong para driver kami dengan aplikasi yang dapat diandalkan.','color' => '#6CC24A','button' => false,'asset' => 'assets/images/card-gojek.svg'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('home-promotion-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\HomePromotionCard::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5edc7779be57795a4d82409adcbb9457)): ?>
<?php $attributes = $__attributesOriginal5edc7779be57795a4d82409adcbb9457; ?>
<?php unset($__attributesOriginal5edc7779be57795a4d82409adcbb9457); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5edc7779be57795a4d82409adcbb9457)): ?>
<?php $component = $__componentOriginal5edc7779be57795a4d82409adcbb9457; ?>
<?php unset($__componentOriginal5edc7779be57795a4d82409adcbb9457); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal5edc7779be57795a4d82409adcbb9457 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5edc7779be57795a4d82409adcbb9457 = $attributes; } ?>
<?php $component = App\View\Components\HomePromotionCard::resolve(['title' => 'Inovasi yang memajukan dengan memanfaatkan teknologi sekitar.','color' => '#FF7F32','button' => false,'asset' => 'assets/images/card-dev.svg'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('home-promotion-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\HomePromotionCard::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5edc7779be57795a4d82409adcbb9457)): ?>
<?php $attributes = $__attributesOriginal5edc7779be57795a4d82409adcbb9457; ?>
<?php unset($__attributesOriginal5edc7779be57795a4d82409adcbb9457); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5edc7779be57795a4d82409adcbb9457)): ?>
<?php $component = $__componentOriginal5edc7779be57795a4d82409adcbb9457; ?>
<?php unset($__componentOriginal5edc7779be57795a4d82409adcbb9457); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal5edc7779be57795a4d82409adcbb9457 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5edc7779be57795a4d82409adcbb9457 = $attributes; } ?>
<?php $component = App\View\Components\HomePromotionCard::resolve(['title' => 'Kami berdedikasi untuk menciptakan dampak sosial-ekonomi positif bagi ekosistem kami.','color' => '#00AA13','button' => true,'asset' => 'assets/images/card-street.svg'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('home-promotion-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\HomePromotionCard::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5edc7779be57795a4d82409adcbb9457)): ?>
<?php $attributes = $__attributesOriginal5edc7779be57795a4d82409adcbb9457; ?>
<?php unset($__attributesOriginal5edc7779be57795a4d82409adcbb9457); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5edc7779be57795a4d82409adcbb9457)): ?>
<?php $component = $__componentOriginal5edc7779be57795a4d82409adcbb9457; ?>
<?php unset($__componentOriginal5edc7779be57795a4d82409adcbb9457); ?>
<?php endif; ?>
            </div>

            <?php if (isset($component)) { $__componentOriginal8a8716efb3c62a45938aca52e78e0322 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a8716efb3c62a45938aca52e78e0322 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.footer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $attributes = $__attributesOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $component = $__componentOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__componentOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>
    </body>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4018a8584a4cc12cea6bc8c2c3d4c53e)): ?>
<?php $attributes = $__attributesOriginal4018a8584a4cc12cea6bc8c2c3d4c53e; ?>
<?php unset($__attributesOriginal4018a8584a4cc12cea6bc8c2c3d4c53e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4018a8584a4cc12cea6bc8c2c3d4c53e)): ?>
<?php $component = $__componentOriginal4018a8584a4cc12cea6bc8c2c3d4c53e; ?>
<?php unset($__componentOriginal4018a8584a4cc12cea6bc8c2c3d4c53e); ?>
<?php endif; ?>
<?php /**PATH C:\Kodingan\Laravel\gokerBaruBanget\goker\Laravel\resources\views/home.blade.php ENDPATH**/ ?>