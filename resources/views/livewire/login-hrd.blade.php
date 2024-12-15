<?php

use App\Livewire\HRDLoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.html')] class extends Component {
    public HRDLoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->dispatch('input_error');
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->dispatch('initnav');

        $this->redirectIntended(default: route('home', absolute: false), navigate: true);
    }
}; ?>

<div class="h-screen relative z-auto">
    <x-nav-before></x-nav-before>
    <div class="bg-[#bce194] relative flex flex-col items-center justify-center w-auto h-full md:justify-between">
        <img class="translate-y-3 absolute" src="{{ asset('assets/images/latar-loginHrd.svg') }}" alt="">
        <!-- Container -->
        <div class="w-full h-full flex flex-col justify-center items-center pt-10">
            <!-- gmbr -->
            <div class="flex items-start justify-center w-full h-[300px] -translate-y-7">
                <img src="{{ asset('assets/images/logo-hrd.png') }}" alt="Illustration"
                    class="w-[450px] sd:w-[30%] md:w-[38%] h-auto">
            </div>

            <!-- Welcome Text -->
            <h1 class="text-center text-2xl font-bold text-black pt-2 pb-2 font-britBlack">
                Selamat Datang HRD Goker!
            </h1>

            <!-- Form -->
            <form wire:submit.prevent="login" method="POST"
                class="w-full md:w-[45%] max-w-2xl flex flex-col gap-6 pt-3 px-5">
                @csrf
                <!-- Username -->
                <div class="flex flex-row items-center w-full h-[50px] bg-[#B45227] rounded-full px-4">
                    <i class="text-[#F9E7CB] fas fa-user"></i>
                    <x-text-input wire:model="form.name" type="text" id="name" name="name" placeholder="Nama"
                        class="flex-1 bg-transparent outline-none text-white placeholder-white ml-3" />

                </div>
                <x-input-error :messages="$errors->get('form.name')" />

                <!-- Password -->
                <div class="flex flex-row items-center w-full h-[50px] bg-[#B45227] rounded-full px-4">
                    <i class="text-[#F9E7CB] fas fa-lock"></i>
                    <x-text-input wire:model="form.password" type="password" id="password" name="password"
                        placeholder="Kata sandi"
                        class="flex-1 bg-transparent outline-none text-white placeholder-white ml-3" />
                    <i id="toggle-password" class="ml-3 fas fa-eye text-[#F9E7CB] cursor-pointer"></i>

                </div>
                <x-input-error :messages="$errors->get('form.password')" />

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
</script>
