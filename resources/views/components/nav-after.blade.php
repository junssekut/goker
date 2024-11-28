<nav
    class="navbar md:flex md:items-center w-full md:justify-around bg-white rounded-bl-2xl rounded-br-2xl shadow-md
            h-24 md:h-auto
            ">
    <div class="flex justify-between items-center md:flex-none">
        <span class="h-24 flex items-center pl-5 md:pl-0">
            <img class="w-32 h-12 object-cover pt-1 cursor-pointer" src="{{ asset('assets/images/goker-cerah.png') }}"
                alt="">
        </span>

        <span class="text-5xl cursor-pointer md:hidden block pr-6">
            <ion-icon name="menu-outline" onclick="DropDown(this)"></ion-icon>
        </span>
    </div>


    <div
        class="nav-right md:flex md:justify-around md:gap-16 md:opacity-100 opacity-0 
            top-[-200px] transition-all ease-in duration-500 bg-white md:static absolute
            w-full md:w-auto z-[-1] md:z-auto pt-7 md:pt-0 rounded-bl-2xl rounded-br-2xl md:rounded-b-0">
        <ul class="md:flex md:items-center md:justify-between md:gap-14">
            <div class="w-full flex justify-center">
                <a href="#" class="nav-list font-britHeavy text-lg">Beranda</a>
            </div>
            <div class="w-full flex justify-center">
                <a href="#" class="nav-list font-britHeavy text-lg">Karir</a>
            </div>
            <div class="w-full flex justify-center">
                <a href="#" class="nav-list font-britHeavy text-lg">Life@Gojek</a>
            </div>

        </ul>

        <span
            class="text-[42px] w-full flex justify-center items-center mt-2 mb-4 md:m-0 gap-1 cursor-pointer relative">
            <ion-icon class="icon-user" name="person-circle-outline"></ion-icon>
            <p class="text-sm md:hidden block">Hello, Shean</p>
            <div
                class="user-dropDown bg-white border-2 p-5 pt-4 pb-5 text-sm rounded-lg hidden top-[42px] md:left-[4px] w-40 shadow-md border-slate-200 left:50%">
                <ul class="flex flex-col gap-3">
                    <li><a href="" class="nav-list font-britHeavy text-[15px]">Lihat Profil</a></li>
                    <li><a href="" class="nav-list font-britHeavy text-[15px]">Riwayat Lamaran</a></li>
                    <li><button
                            class="font-britHeavy text-[15px] bg-unguGojek p-3 pt-1.5 pb-1.5 rounded-xl text-white duration-300 hover:bg-ijoGojek">Sign
                            out</button></li>
                </ul>
            </div>
        </span>
    </div>

</nav>

<script>
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

    dropdownMenu.addEventListener('mouseleave', (e) => {
        if (!parent.contains(e.relatedTarget) && !dropMenu.contains(e.relatedTarget)) {
            hideDropdown();
        }
    });
</script>