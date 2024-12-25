<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['asset', 'title', 'location', 'careerId']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['asset', 'title', 'location', 'careerId']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<div class="card rounded-2xl shadow-xl bg-white p-4">
    <img src="<?php echo e(asset($asset)); ?>" alt="UI/UX Designer" class="w-full rounded-xl h-[150px] mb-4" />
    <h2 class="text-lg font-britBlack mb-1 text-gray-800 line-clamp-2 md:min-h-[3.46rem]"><?php echo e($title); ?></h2>
    <div class="flex flex-row mt-2 mb-7 gap-x-2 items-center">
        <i class="fas fa-location-dot"></i>
        <h3 class="text-sm font-mnbook"><?php echo e($location); ?></h3>
    </div>
    <a href="<?php echo e(route('career-detail', ['careerId' => $careerId])); ?>">
        <button
            class="bg-ijoGojek hover:bg-kuningTuaGojek text-white font-britBlack py-2 px-4 rounded-lg w-full flex items-center justify-center gap-2 transition duration-300 text-sm">
            Selengkapnya ➜
        </button>
    </a>

</div>
<?php /**PATH C:\Kodingan\Laravel\gokerBaruBanget\goker\Laravel\resources\views/components/card-carrer.blade.php ENDPATH**/ ?>