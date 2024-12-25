<div class="relative flex flex-col md:flex-row w-10/12 justify-around items-center">
    <div class="absolute w-full h-auto md:h-[224px] z-0 rounded-[35px] inset-0 m-auto"
        style="background-color: <?php echo e($color); ?>">
    </div>
    <div class="flex-col">
        <?php if(!$button): ?>
            <h1 class="font-britHeavy text-2xl md:text-3xl px-8 w-full md:w-[450px] pt-8 md:pt-0">
                <?php echo e($title); ?>

            </h1>
        <?php endif; ?>

        <?php if($button): ?>
            <h1 class="font-britHeavy text-2xl p-8 pb-4 w-full md:w-[449px]">
                <?php echo e($title); ?>

            </h1>
            <a href="/career"
                class="font-britHeavy text-base px-8 text-kuningGojek hover:text-kuningTuaGojek transition duration-300 ease-in-out"><?php echo e('Gabung Sekarang →'); ?></a>
        <?php endif; ?>
    </div>
    <img class="object-cover max-w-[380px] md:h-[224px]" src="<?php echo e(asset($asset)); ?>">
</div>
<?php /**PATH C:\Kodingan\Laravel\gokerBaruBanget\goker\resources\views/components/home-promotion-card.blade.php ENDPATH**/ ?>