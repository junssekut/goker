<div>
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
    <div class="w-full h-[580px] relative">
        <img class="w-full h-full" src="<?php echo e(asset('assets/images/detailBackground.png')); ?>" alt="">
        <div class="absolute top-[45%] left-[12%] text-white">
            <h1 class="title font-britHeavy text-5xl mb-3"><?php echo e($career->name); ?></h1>
            <h2 class="place font-britReg text-3xl"><?php echo e($career->location); ?></h2>
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
                    <?php echo html_entity_decode($career->detail->Description); ?>

                </div>

            </div>
            <div class="Jobdesk mb-5">
                <div class="mb-7">
                    <h1 class="font-mnbold">Apa yang Anda akan lakukan:</h1>
                </div>
                <ul class="list-disc pl-6 font-mnbook">
                    <?php echo html_entity_decode($career->detail->Jobdesk); ?>

                </ul>
            </div>
            <div class="Requirement mb-5">
                <div class="mb-7">
                    <h1 class="font-mnbold">Apa yang Anda perlukan:</h1>
                </div>
                <ul class="list-disc pl-6 font-mnbook">
                    <?php echo html_entity_decode($career->detail->Requirement); ?>

                </ul>
            </div>
            <div class="AboutTeam mb-5">
                <div class="mb-7">
                    <h1 class="font-mnbold">Tentang tim ini:</h1>
                </div>
                <div>
                    <?php echo html_entity_decode($career->detail->AboutTeam); ?>

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
            <!--[if BLOCK]><![endif]--><?php if(auth()->guard()->check()): ?>
                
                <form class="flex flex-col gap-1 justify-center md:justify-start w-[250px]" wire:submit.prevent="submitCV">
                    <!-- Upload CV -->
                    <div class="mb-3">
                        <input type="file" wire:model="cv" class="w-full text-sm">
                        <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['cv'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="error"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                    </div>

                    <!-- Preview CV -->
                    <!--[if BLOCK]><![endif]--><?php if($cvPreviewUrl): ?>
                        <div class="preview-container"
                            style="position: relative; width: 100%; max-width: 400px; margin-bottom: 20px;">

                            <embed class="rounded-2xl shadow-md border-1"
                                src="<?php echo e(asset('storage/' . $cvPreviewUrl)); ?>#toolbar=0" type="application/pdf"
                                width="100%" height="300px"></embed>
                            <button type="button"
                                class="bg-ijoGojek rounded-full text-white px-[6px] font-britHeavy hover:bg-red-600 duration-200"
                                wire:click="removeCv" style="position: absolute; top: 10px; right: 10px;">
                                X
                            </button>
                        </div>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                    <!-- Tombol Dinamis -->
                    <button type="submit" class="bg-ijoGojek font-britHeavy text-white py-2 rounded-2xl"
                        <?php echo e(!$uploaded ? 'disabled' : ''); ?>>
                        Kumpulkan CV
                    </button>
                </form>
                
            <?php else: ?>
                <a href="<?php echo e(route('login')); ?>"
                    class="p-2 bg-ijoGojek text-white text-center rounded-2xl font-britHeavy mb-3 hover:bg-kuningTuaGojek duration-200">Login
                    untuk dapat
                    bergabung
                    menjadi
                    Gokers!</a>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->




            <!-- Pesan Flash -->
            <!--[if BLOCK]><![endif]--><?php if(session()->has('message')): ?>
                <div class="alert alert-success mt-3"><?php echo e(session('message')); ?></div>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

            <div>
                <p class="text-[13px]">Tutup pendaftaran <?php echo e($career->detail->DateEnd->format('d F Y')); ?></p>
                <p class="text-[12px] text-gray-500">*S&K berlaku</p>
            </div>

            <div class="flex flex-col gap-2 justify-center mt-3">
                <img src="<?php echo e(asset('assets/images/img-detail.png')); ?>" alt="" class="rounded-xl w-auto">
                <div class="w-full flex justify-center">
                    <p style="text-align: center" class="text-[14px] w-[70%]">“Kata Juna, orang sukses bukan terlahir
                        tapi
                        terbuat”
                    </p>
                </div>
            </div>
        </div>


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
</div>
<?php /**PATH C:\Kodingan\Laravel\gokerBaruBanget\goker\resources\views/livewire/career-detail.blade.php ENDPATH**/ ?>