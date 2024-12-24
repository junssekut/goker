<?php

use App\Livewire\HRDLoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

?>

<div class="h-screen relative z-auto">
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
    <div class="bg-[#bce194] relative flex flex-col items-center justify-center w-auto h-full md:justify-between">
        <img class="translate-y-3 absolute" src="<?php echo e(asset('assets/images/latar-loginHrd.svg')); ?>" alt="">
        <!-- Container -->
        <div class="w-full h-full flex flex-col justify-center items-center pt-10">
            <!-- gmbr -->
            <div class="flex items-start justify-center object-cover w-full -translate-y-7">
                <img src="<?php echo e(asset('assets/images/logo-hrd.png')); ?>" alt="Illustration"
                    class="w-[450px] h-full sd:w-[30%] md:w-[38%]">
            </div>

            <!-- Welcome Text -->
            <h1 class="text-center text-2xl font-bold text-black sm pt-2 pb-2 font-britBlack">
                Selamat Datang HRD Goker!
            </h1>

            <!-- Form -->
            <form wire:submit.prevent="login" method="POST"
                class="w-full md:w-[45%] max-w-2xl flex flex-col gap-6 pt-3 px-5">
                <?php echo csrf_field(); ?>
                <!-- Username -->
                <div class="flex flex-row items-center w-full h-[50px] bg-[#B45227] rounded-full px-4">
                    <i class="text-[#F9E7CB] fas fa-user"></i>
                    <?php if (isset($component)) { $__componentOriginal18c21970322f9e5c938bc954620c12bb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal18c21970322f9e5c938bc954620c12bb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['wire:model' => 'form.name','type' => 'text','id' => 'name','name' => 'name','placeholder' => 'Nama','class' => 'flex-1 bg-transparent outline-none text-white placeholder-white ml-3']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'form.name','type' => 'text','id' => 'name','name' => 'name','placeholder' => 'Nama','class' => 'flex-1 bg-transparent outline-none text-white placeholder-white ml-3']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['messages' => $errors->get('form.name')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('form.name'))]); ?>
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

                <!-- Password -->
                <div class="flex flex-row items-center w-full h-[50px] bg-[#B45227] rounded-full px-4">
                    <i class="text-[#F9E7CB] fas fa-lock"></i>
                    <?php if (isset($component)) { $__componentOriginal18c21970322f9e5c938bc954620c12bb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal18c21970322f9e5c938bc954620c12bb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['wire:model' => 'form.password','type' => 'password','id' => 'password','name' => 'password','placeholder' => 'Kata sandi','class' => 'flex-1 bg-transparent outline-none text-white placeholder-white ml-3']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'form.password','type' => 'password','id' => 'password','name' => 'password','placeholder' => 'Kata sandi','class' => 'flex-1 bg-transparent outline-none text-white placeholder-white ml-3']); ?>
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
                    <i id="toggle-password" class="ml-3 fas fa-eye text-[#F9E7CB] cursor-pointer"></i>

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

                <!-- Submit Button -->
                <div>
                    <button type="submit"
                        class="w-full bg-white text-black font-medium py-2 px-4 rounded-full hover:bg-[#185229] duration-200 hover:text-white">
                        Masuk
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    toggle()

    function toggle() {
        const passwordInput = document.getElementById('password');
        const togglePassword = document.getElementById('toggle-password');

        // Event listener untuk ikon toggle
        togglePassword.addEventListener('click', () => {
            const type = passwordInput.type === 'password' ? 'text' : 'password';
            passwordInput.type = type;

            // Ubah ikon mata
            togglePassword.classList.toggle('fa-eye');
            togglePassword.classList.toggle('fa-eye-slash');
        });

        const usernameInput = document.getElementById('name');
        const warning = document.getElementById('warning');

        usernameInput.addEventListener('input', () => {
            if (usernameInput.value.length > 20) {
                warning.style.display = 'block';
            } else {
                warning.style.display = 'none';
            }
        });

    }
</script><?php /**PATH C:\Kodingan\Laravel\gokerBaruBanget\goker\resources\views\livewire/login-hrd.blade.php ENDPATH**/ ?>