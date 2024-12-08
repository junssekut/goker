<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.html')] class extends Component {
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->dispatch('input_error');

        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirectIntended(default: route('home', absolute: false), navigate: true);
    }
}; ?>

<div class="bg-gradient-to-b from-white to-[#F7CE55] h-100">
    <x-nav-before></x-nav-before>
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
                <img src="{{ asset('assets/images/logo/login-image.png') }}" alt="" class="max-w-full">
            </div>
            <!-- Form -->
            <div
                class="w-full md:w-[40%] max-w-md p-8 rounded-3xl bg-[#00AA13] flex flex-col items-center shadow-[-20px_20px_0_rgba(0,0,0,0.2)]">
                <h2 class="text-xl text-center font-bold text-white mt-4 mb-6">Selamat datang, Gokers!</h2>

                <form wire:submit.prevent="login" class="w-full">
                    <div class="flex flex-col gap-5">
                        <!-- Input Email -->
                        <div>
                            <div class="flex flex-row items-center w-full h-[60px] bg-[#F7CE55] rounded-full px-4">
                                <i class="text-[#DA8500] fas fa-user"></i>
                                <x-text-input wire:model="form.email" type="email" id="email" name="email"
                                    placeholder="Email"
                                    class="flex-1 bg-transparent outline-none text-[#C06100] placeholder-[#EF9334] ml-3" />
                            </div>
                            <x-input-error :messages="$errors->get('form.email')" />
                        </div>
                        <!-- Input Password -->
                        <div>
                            <div class="flex flex-row items-center w-full h-[60px] bg-[#F7CE55] rounded-full px-4">
                                <i class="text-[#DA8500] fas fa-lock"></i>
                                <input wire:model="form.password" type="password" id="password" name="password"
                                    placeholder="Kata sandi"
                                    class="flex-1 bg-transparent outline-none text-[#C06100] placeholder-[#EF9334] ml-3">
                            </div>
                            <x-input-error :messages="$errors->get('form.password')" />
                        </div>
                    </div>

                    <div class="flex flex-row justify-between items-center px-2 my-4 text-white">
                        <!-- Kotak Centang -->
                        <div class="flex items-center">
                            <input wire:model="form.remember" type="checkbox" id="remember" class="custom-checkbox">
                            <label for="remember" class="ml-2 text-white">Ingat saya</label>
                        </div>
                        <!-- Lupa Kata Sandi -->
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="hover:underline text-sm text-white">
                                Lupa kata sandi?
                            </a>
                        @endif
                    </div>

                    <!-- Tombol Masuk -->
                    <button type="submit"
                        class="w-full py-3 bg-white text-black font-medium rounded-full hover:bg-green-700 duration-300 hover:text-white">
                        Masuk
                    </button>

                    <div class="text-center mt-4 text-white">
                        <p>Gokers belum punya akun? <a href="{{ route('register') }}"
                                class="text-[#F7CE55] underline">Daftar</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
