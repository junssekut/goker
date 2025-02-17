<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component {
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>

<div class="button-login flex justify-center gap-3 mt-3 pb-6 md:mt-0 md:pb-0">
    {{-- {{ dd() }}
    @php

        $isAdminOrHRD = Auth::guard('admin')->check() || Auth::guard('hrd')->check();
    @endphp --}}

    @if (Auth::guard('user')->user())
        <span
            class="{{ Route::is('home') ? 'u-icon text-white text-[42px] w-full flex justify-center items-center mt-2 mb-4 md:m-0 gap-1 cursor-pointer relative' : 'u-icon text-black text-[42px] w-full flex justify-center items-center mt-2 mb-4 md:m-0 gap-1 cursor-pointer relative' }} ">

            <a class="flex items-center" href="{{ url('/user') }}"><ion-icon class="icon-user" name="person-circle-outline"
                    class="">
                </ion-icon></a>
            <p class="text-sm md:hidden block">Hello, {{ Auth::guard('user')->user()->name }}</p>
            <div
                class="user-dropDown bg-white border-2 p-5 pt-4 pb-5 text-sm rounded-lg hidden top-[42px] md:left-[4px] w-40 shadow-md border-slate-200 left:50%">
                <ul class="flex flex-col gap-3">
                    <li><a href="{{ url('/user') }}" class="user-list font-britHeavy text-[15px]">Lihat Profil</a>
                    </li>
                    <li><a href="{{ url('/user') }}" class="user-list font-britHeavy text-[15px]">Riwayat
                            Lamaran</a>
                    </li>
                    <li><button wire:click="logout"
                            class="font-britHeavy text-[15px] bg-unguGojek p-3 pt-1.5 pb-1.5 rounded-xl text-white duration-300 hover:bg-ijoGojek">Sign
                            out</button></li>
                </ul>
            </div>

        </span>


        <script defer>
            let icon = document.querySelector('.icon-user')
            let dropMenu = document.querySelector('.user-dropDown')
            let parent = icon.closest('span')
            const showDropdown = () => {
                dropMenu.classList.add('absolute')
                dropMenu.classList.remove('hidden') // Tambahkan class visible
            };


            const hideDropdown = () => {
                dropMenu.classList.remove('absolute')
                dropMenu.classList.add('hidden') // Tambahkan class hidden
            };

            parent.addEventListener('mouseover', showDropdown);

            parent.addEventListener('mouseleave', (e) => {
                if (!parent.contains(e.relatedTarget) && !dropMenu.contains(e.relatedTarget)) {
                    hideDropdown();
                }
            });

            dropMenu.addEventListener('mouseleave', (e) => {
                if (!parent.contains(e.relatedTarget) && !dropMenu.contains(e.relatedTarget)) {
                    hideDropdown();
                }
            });
        </script>
    @else
        @if (!(Route::is('login') || Route::is('register')))
            <button
                class="font-britHeavy text-lg pl-5 pr-5 p-1 md:pt-0 md:pb-0 bg-unguGojek text-white rounded-3xl duration-300 hover:bg-ijoGojek">
                <a href="/user" class="">
                    Masuk
                </a>
            </button>

            @if (Route::has('register'))
                <button
                    class="font-britHeavy text-lg pl-5 pr-5 bg-ijoGojek text-white rounded-3xl duration-300 hover:bg-unguGojek">
                    <a href="{{ route('register') }}" class="">
                        Daftar
                    </a>
                </button>
            @endif
        @endif
    @endauth
</div>
