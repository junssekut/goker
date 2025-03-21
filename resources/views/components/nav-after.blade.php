<nav
    class="navbar justify-around md:flex md:items-center w-full md:px-44 md:justify-between rounded-bl-2xl rounded-br-2xl
            h-24 md:h-auto fixed pt-7 bg-transparent backdrop-blur-0 transition-all duration-700 shadow-none
            ">
    <div class="flex justify-between items-center md:flex-none">
        <span class="h-24 flex items-center pl-5 md:pl-0">
            <img class="goker-logo w-full h-12 cursor-pointer"
                src="{{ Route::is('home') ? asset('assets/images/logo/goker-gelap.png') : asset('assets/images/goker-cerah.png') }}"
                alt="">
        </span>

        <span class="text-5xl cursor-pointer md:hidden block pr-6">
            <ion-icon name="menu-outline" onclick="DropDown(this)"></ion-icon>
        </span>
    </div>

    <div
        class="nav-right md:flex md:justify-around md:gap-16 md:opacity-100 opacity-0 
            top-[-200px] transition-all ease-in duration-500  md:static absolute z-0
            w-full md:w-auto md:z-auto pt-7 md:pt-0 rounded-bl-2xl rounded-br-2xl md:rounded-b-0 bg-white md:bg-transparent">
        <ul class="md:flex md:items-center md:justify-between md:gap-14">
            <div class="w-full flex justify-center">
                <a href="#"
                    class="{{ Route::is('home') ? 'nav-list nl-white font-britHeavy text-lg text-white' : 'nav-list nl-black font-britHeavy text-lg' }}">Beranda</a>
            </div>
            <div class="w-full flex justify-center">
                <a href="#"
                    class="{{ Route::is('home') ? 'nav-list nl-white font-britHeavy text-lg text-white' : 'nav-list nl-black font-britHeavy text-lg' }}">Karir</a>
            </div>
            <div class="w-full flex justify-center">
                <a href="#"
                    class="{{ Route::is('home') ? 'nav-list nl-white font-britHeavy text-lg text-white' : 'nav-list nl-black font-britHeavy text-lg' }}">Life@Gojek</a>
            </div>

        </ul>



        <span
            class=" {{ Route::is('home') ? 'u-icon text-white text-[42px] w-full flex justify-center items-center mt-2 mb-4 md:m-0 gap-1 cursor-pointer relative' : 'u-icon text-black text-[42px] w-full flex justify-center items-center mt-2 mb-4 md:m-0 gap-1 cursor-pointer relative' }} ">
            <ion-icon class="icon-user" name="person-circle-outline" class=""></ion-icon>
            <p class="text-sm md:hidden block">Hello, Shean</p>
            <div
                class="user-dropDown bg-white border-2 p-5 pt-4 pb-5 text-sm rounded-lg hidden top-[42px] md:left-[4px] w-40 shadow-md border-slate-200 left:50%">
                <ul class="flex flex-col gap-3">
                    <li><a href="" class="user-list font-britHeavy text-[15px]">Lihat Profil</a></li>
                    <li><a href="" class="user-list font-britHeavy text-[15px]">Riwayat Lamaran</a></li>
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
    document.addEventListener("DOMContentLoaded", function() {
        let nav = document.querySelector('.navbar');
        let img = document.querySelector('.goker-logo');
        let navList = document.querySelectorAll('.nav-list')
        let uIcon = document.querySelector('.u-icon')

        function handleScroll() {
            let image = document.querySelector('.navbar__image');
            let list = document.querySelectorAll('.nav-list');


            if (window.scrollY > 10) {
                nav.classList.add("bg-white", "pt-0", "shadow-md");
                nav.classList.remove("bg-transparent", "pt-7", "shadow-none");
                if (navList[0].classList.contains('nl-white')) {
                    img.src = "assets/images/goker-cerah.png";
                    navList.forEach(e => {
                        e.classList.remove('text-white')
                        e.classList.add('text-black')
                    });
                    uIcon.classList.remove('text-white')
                    uIcon.classList.add('text-black')
                }
            } else {
                nav.classList.add("bg-transparent", "pt-7", "shadow-none");
                nav.classList.remove("bg-white", "pt-0", "shadow-md");
                if (navList[0].classList.contains('nl-white')) {
                    img.src = "assets/images/logo/goker-gelap.png";
                    navList.forEach(e => {
                        e.classList.add('text-white')
                        e.classList.remove('text-black')
                    })
                    uIcon.classList.remove('text-black')
                    uIcon.classList.add('text-white')

                }

            }
        }

        if (window.innerWidth > 1124) {
            window.addEventListener("scroll", handleScroll);
            nav.classList.remove("bg-white", "pt-0", "shadow-md");
            nav.classList.add("bg-transparent", "pt-7", "shadow-none");
            if (navList[0].classList.contains('nl-white')) {
                img.src = "assets/images/logo/goker-gelap.png";
                navList.forEach(e => {
                    e.classList.add('text-white')
                    e.classList.remove('text-black')
                })
                uIcon.classList.remove('text-black')
                uIcon.classList.add('text-white')


            }
        } else {
            window.removeEventListener("scroll", handleScroll);
            nav.classList.add("bg-white", "pt-0", "shadow-md");
            nav.classList.remove("bg-transparent", "pt-7", "shadow-none");
            if (navList[0].classList.contains('nl-white')) {
                img.src = "assets/images/goker-cerah.png";
                navList.forEach(e => {
                    e.classList.remove('text-white')
                    e.classList.add('text-black')
                });
                uIcon.classList.remove('text-white')
                uIcon.classList.add('text-black')
            }
        }


        window.addEventListener("resize", function() {
            if (window.innerWidth > 1124) {
                window.addEventListener("scroll", handleScroll);
                nav.classList.remove("bg-white", "pt-0", "shadow-md");
                nav.classList.add("bg-transparent", "pt-7", "shadow-none");
                if (navList[0].classList.contains('nl-white')) {
                    img.src = "assets/images/logo/goker-gelap.png";
                    navList.forEach(e => {
                        e.classList.add('text-white')
                        e.classList.remove('text-black')
                    })
                    uIcon.classList.remove('text-black')
                    uIcon.classList.add('text-white')


                }
            } else {
                window.removeEventListener("scroll", handleScroll);
                nav.classList.add("bg-white", "pt-0", "shadow-md");
                nav.classList.remove("bg-transparent", "pt-7", "shadow-none");
                if (navList[0].classList.contains('nl-white')) {
                    img.src = "assets/images/goker-cerah.png";
                    navList.forEach(e => {
                        e.classList.remove('text-white')
                        e.classList.add('text-black')
                    });
                    uIcon.classList.remove('text-white')
                    uIcon.classList.add('text-black')
                }
            }
        });
    });

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
