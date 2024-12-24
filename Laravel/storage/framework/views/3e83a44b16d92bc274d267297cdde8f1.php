<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

?>

<div class="bg-gradient-to-b from-white to-[#F7CE55] h-100">
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
    <div class="relative flex items-center justify-center h-screen">
        <!-- Lingkaran dekoratif -->
        <div class="absolute w-[30vw] h-[30vw] bg-green-500 bg-opacity-20 rounded-full top-[15vh] left-[10vw] z-[-2]">
        </div>
        <div class="absolute w-[35vw] h-[35vw] bg-green-500 bg-opacity-20 rounded-full top-[10vh] right-[5vw] z-[-2]">
        </div>
        <div class="absolute w-[25vw] h-[25vw] bg-green-500 bg-opacity-20 rounded-full top-[30vh] left-[35vw] z-[-2]">
        </div>

        <div
            class="flex flex-col md:flex-row w-full max-w-6xl items-center justify-center md:justify-between px-4 sm:px-10 md:px-20 mt-10 md:mt-0">
            <!-- Gambar -->
            <div class="w-full md:w-[50%] hidden md:flex justify-center">
                <img src="<?php echo e(asset('assets/images/logo/login-image.png')); ?>" alt="" class="max-w-full">
            </div>
            <!-- Form -->
            <div
                class="w-full md:w-[501px] max-w-md p-8 rounded-3xl bg-[#00AA13] flex flex-col items-center shadow-[-20px_20px_0_rgba(0,0,0,0.2)]">
                <h2 class="text-3xl text-center text-white mt-4 mb-6 font-britBlack">Selamat datang, Gokers!
                </h2>

                <form wire:submit.prevent="login" class="w-full font-mnbook">
                    <div class="flex flex-col gap-5">
                        <!-- Input Email -->
                        <div>
                            <div class="flex flex-row items-center w-full h-[60px] bg-[#F7CE55] rounded-full px-4">
                                <i class="text-[#DA8500] fas fa-user"></i>
                                <?php if (isset($component)) { $__componentOriginal18c21970322f9e5c938bc954620c12bb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal18c21970322f9e5c938bc954620c12bb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['wire:model' => 'form.email','type' => 'email','id' => 'email','name' => 'email','placeholder' => 'Email','class' => 'flex-1 bg-transparent outline-none text-[#C06100] placeholder-[#EF9334] ml-3']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'form.email','type' => 'email','id' => 'email','name' => 'email','placeholder' => 'Email','class' => 'flex-1 bg-transparent outline-none text-[#C06100] placeholder-[#EF9334] ml-3']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal18c21970322f9e5c938bc954620c12bb)): ?>
<?php $attributes = $__attributesOriginal18c21970322f9e5c938bc954620c12bb; ?>
<?php unset($__attributesOriginal18c21970322f9e5c938bc954620c12bb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal18c21970322f9e5c938bc954620c12bb)): ?>
<?php $component = $__componentOriginal18c21970322f9e5c938bc954620c12bb; ?>
<?php unset($__componentOriginal18c21970322f9e5c938bc954620c12bb); ?>
<?php endif; ?>
                            </div>
                            <?php if (isset($component)) { $__componentOriginalf94ed9c5393ef72725d159fe01139746 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf94ed9c5393ef72725d159fe01139746 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['messages' => $errors->get('form.email')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('form.email'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf94ed9c5393ef72725d159fe01139746)): ?>
<?php $attributes = $__attributesOriginalf94ed9c5393ef72725d159fe01139746; ?>
<?php unset($__attributesOriginalf94ed9c5393ef72725d159fe01139746); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf94ed9c5393ef72725d159fe01139746)): ?>
<?php $component = $__componentOriginalf94ed9c5393ef72725d159fe01139746; ?>
<?php unset($__componentOriginalf94ed9c5393ef72725d159fe01139746); ?>
<?php endif; ?>
                        </div>
                        <!-- Input Password -->
                        <div>
                            <div class="flex flex-row items-center w-full h-[60px] bg-[#F7CE55] rounded-full px-4">
                                <i class="text-[#DA8500] fas fa-lock"></i>
                                <input wire:model="form.password" type="password" id="password" name="password"
                                    placeholder="Kata sandi"
                                    class="flex-1 bg-transparent outline-none text-[#C06100] placeholder-[#EF9334] ml-3">
                            </div>
                            <?php if (isset($component)) { $__componentOriginalf94ed9c5393ef72725d159fe01139746 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf94ed9c5393ef72725d159fe01139746 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['messages' => $errors->get('form.password')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('form.password'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf94ed9c5393ef72725d159fe01139746)): ?>
<?php $attributes = $__attributesOriginalf94ed9c5393ef72725d159fe01139746; ?>
<?php unset($__attributesOriginalf94ed9c5393ef72725d159fe01139746); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf94ed9c5393ef72725d159fe01139746)): ?>
<?php $component = $__componentOriginalf94ed9c5393ef72725d159fe01139746; ?>
<?php unset($__componentOriginalf94ed9c5393ef72725d159fe01139746); ?>
<?php endif; ?>
                        </div>
                    </div>

                    <div class="flex flex-row justify-between items-center px-2 my-4 text-white">
                        <!-- Kotak Centang -->

                        <!-- Lupa Kata Sandi -->
                        <!--[if BLOCK]><![endif]--><?php if(Route::has('password.request')): ?>
                            <a href="<?php echo e(route('password.request')); ?>"
                                class="hover:underline text-sm text-white duration-200">
                                Gokers lupa kata sandi?
                            </a>
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                    </div>

                    <button type="submit"
                        class="w-full py-3 bg-white rounded-full duration-300 hover:bg-[#F09A1F] hover:text-white font-mnbook">
                        Masuk
                    </button>

                    <button type="button"
                        class="w-full py-3 bg-white text-black font-mnbook rounded-full  duration-300 hover:bg-[#F09A1F] flex items-center justify-center hover:text-white my-3">
                        <img src="<?php echo e(asset('assets/images/logo-google.png')); ?>" alt="Google logo" class="h-4 mr-2">
                        Masuk dengan Google
                    </button>

                    <div class="text-center mt-4 text-white font-mnbook">
                        <p>Gokers belum punya akun? <a href="<?php echo e(route('register')); ?>"
                                class="text-[#F7CE55] hover:text-white hover:underline duration-200">Daftar</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\Kodingan\Laravel\gokerBaruBanget\goker\resources\views\livewire/pages/auth/login.blade.php ENDPATH**/ ?>