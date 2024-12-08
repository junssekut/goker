<?php

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.html')] class extends Component {
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';
    public bool $agreement;

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $this->dispatch('input_error');

        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
            'agreement' => 'required',
        ]);

        $validated['password'] = Hash::make($validated['password']);

        event(new Registered(($user = User::create($validated))));

        Auth::login($user);

        $this->redirect(route('profile', absolute: false), navigate: true);
    }
}; ?>

<div class="bg-gradient-to-b from-white to-unguGojek h-100">
    <x-nav-before></x-nav-before>
    <div class="relative flex items-center justify-center h-screen">
        <div class="absolute w-[30vw] h-[30vw] bg-green-500 bg-opacity-20 rounded-full top-[15vh] left-[10vw] z-[-2 ]">
        </div>
        <div class="absolute w-[35vw] h-[35vw] bg-green-500 bg-opacity-20 rounded-full top-[10vh] right-[5vw] z-[-2]">
        </div>
        <div class="absolute w-[25vw] h-[25vw] bg-green-500 bg-opacity-20 rounded-full top-[30vh] left-[35vw] z-[-2]">
        </div>
        <div class="flex flex-col md:flex-row w-full max-w-6xl items-center justify-evenly md:mt-0 ">
            <div
                class="w-full mt-20 md:w-[40%] max-w-md p-8 rounded-3xl bg-[#00AA13] flex flex-col items-center shadow-[20px_20px_0_rgba(0,0,0,0.2)]">
                <h2 class="text-xl text-center font-bold text-white mt-4 mb-6">Bergabung menjadi Gokers!</h2>

                <form wire:submit.prevent="register" class="w-full">
                    @csrf
                    <div class="flex flex-col gap-5">
                        <!-- Input Username -->
                        <div>
                            <div class="flex flex-row items-center w-full h-auto py-3 bg-[#F7CE55] rounded-full px-4">
                                <i class="text-[#DA8500] fas fa-user"></i>
                                <x-text-input wire:model="name" type="text" id="name" placeholder="Nama Lengkap"
                                    name="name"
                                    class="flex-1 bg-transparent outline-none text-[#C06100] placeholder-[#EF9334] ml-3" />
                            </div>
                            <div>
                                <x-input-error :messages="$errors->get('name')" />
                            </div>
                        </div>

                        <!-- Input Email -->
                        <div>
                            <div class="flex flex-row items-center w-full h-auto py-3 bg-[#F7CE55] rounded-full px-4">
                                <i class="text-[#DA8500] fas fa-envelope"></i>
                                <x-text-input wire:model="email" type="email" id="email" placeholder="Email"
                                    name="email"
                                    class="flex-1 bg-transparent outline-none text-[#C06100] placeholder-[#EF9334] ml-3" />
                            </div>
                            <div>
                                <x-input-error :messages="$errors->get('email')" />
                            </div>
                        </div>



                        <!-- Input Password -->
                        <div>
                            <div class="flex flex-row items-center w-full h-auto py-3 bg-[#F7CE55] rounded-full px-4">
                                <i class="text-[#DA8500] fas fa-lock"></i>
                                <x-text-input wire:model="password" type="password" id="password"
                                    placeholder="Kata sandi" name="password"
                                    class="flex-1 bg-transparent outline-none text-[#C06100] placeholder-[#EF9334] ml-3" />
                            </div>
                            <div>
                                <x-input-error :messages="$errors->get('password')" />
                            </div>
                        </div>

                        <!-- Konfirmasi Password -->
                        <div>
                            <div class="flex flex-row items-center w-full h-auto py-3 bg-[#F7CE55] rounded-full px-4">
                                <i class="text-[#DA8500] fas fa-lock"></i>
                                <x-text-input wire:model="password_confirmation" type="password"
                                    id="password_confirmation" name="password_confirmation"
                                    placeholder="Konfirmasi Kata sandi"
                                    class="flex-1 bg-transparent outline-none text-[#C06100] placeholder-[#EF9334] ml-3" />
                            </div>
                            <div>
                                <x-input-error :messages="$errors->get('password_confirmation')" />
                            </div>
                        </div>
                    </div>

                    <!-- Tombol Submit -->
                    <div class="flex flex-col  px-2 my-4 text-white">
                        <div class="flex items-center">

                            <input wire:model="agreement" id="agreement" type="checkbox" class="custom-checkbox"
                                name="agreement" />
                            <label for="agreement" class="ml-2 text-sm text-white">
                                {{ __('Saya siap menjadi Gokers') }}
                            </label>
                        </div>
                        <div>
                            <x-input-error :messages="$errors->get('agreement')" class="mt-2" />
                        </div>

                    </div>

                    <button type="submit"
                        class="w-full py-3 bg-white text-black font-medium rounded-full mb-4 duration-300 hover:bg-[#F09A1F] hover:text-white">
                        Daftar
                    </button>

                    <button type="button"
                        class="w-full py-3 bg-white text-black font-medium rounded-full  duration-300 hover:bg-[#F09A1F] flex items-center justify-center hover:text-white">
                        <img src="{{ asset('assets/images/logo-google.png') }}" alt="Google logo" class="h-4 mr-2">
                        Daftar dengan Google
                    </button>

                    <!-- Tombol Masuk -->

                    <div class="text-center mt-4 text-white">
                        <p>Gokers sudah punya akun? <a href="{{ route('login') }}"
                                class="text-[#F7CE55] underline hover:text-black duration-200">Masuk</a></p>
                    </div>

                </form>
            </div>

            <div class="w-full
                            md:w-[50%] hidden md:flex justify-center">
                <img src="{{ asset('assets/images/goker-register.svg') }}" alt="" class="max-w-full">
            </div>
        </div>
    </div>
</div>
