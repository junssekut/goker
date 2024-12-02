<nav
    class="navbar justify-around md:flex md:items-center w-full md:px-44 md:justify-between rounded-bl-2xl rounded-br-2xl
            h-24 md:h-auto fixed pt-7 bg-transparent backdrop-blur-0 transition-all duration-700 shadow-none z-[9999]
            ">
    <div class="flex justify-between items-center md:flex-none">
        <span class="h-24 flex items-center pl-5 md:pl-0">
            <img class="goker-logo w-full h-12 cursor-pointer"
                src="{{ Route::is('home') ? asset('assets/images/goker-gelap.png') : asset('assets/images/goker-cerah.png') }}"
                alt="">
        </span>

        <span class="text-5xl cursor-pointer md:hidden block pr-6">
            <ion-icon name="menu-outline" onclick="DropDown(this)"></ion-icon>
        </span>
    </div>


    <div
        class="nav-right md:flex md:justify-around md:gap-16 md:opacity-100 opacity-0 
            top-[80px] transition-all ease-in duration-200  md:static absolute z-0
            w-full md:w-auto md:z-auto pt-7 md:pt-0 rounded-bl-2xl rounded-br-2xl md:rounded-b-0 bg-white md:bg-transparent shadow-md md:shadow-none">
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

        @if (!(Route::is('register') || Route::is('signin')))
            <div class="button-login flex justify-center gap-3 mt-3 pb-6 md:mt-0 md:pb-0">
                <button
                    class="font-britHeavy text-lg pl-5 pr-5 p-1 md:pt-0 md:pb-0 bg-unguGojek text-white rounded-3xl duration-300 hover:bg-ijoGojek">
                    <a href="#" class="">Masuk</a>
                </button>
                <button
                    class="font-britHeavy text-lg pl-5 pr-5 bg-ijoGojek text-white rounded-3xl duration-300 hover:bg-unguGojek"><a
                        href="">Daftar</a></button>
            </div>
        @endif

    </div>

</nav>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        let nav = document.querySelector('.navbar');
        let img = document.querySelector('.goker-logo');
        let navList = document.querySelectorAll('.nav-list')
        let uIcon = document.querySelector('.u-icon')
        const currentRoute = "{{ Route::currentRouteName() }}";

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
                        e.classList.add('nl-black')
                        e.classList.remove('nl-white')
                    });

                }
            } else {
                nav.classList.add("bg-transparent", "pt-7", "shadow-none");
                nav.classList.remove("bg-white", "pt-0", "shadow-md");
                if (navList[0].classList.contains('nl-white') || navList[0].classList.contains('nl-black')) {
                    img.src = "assets/images/goker-gelap.png";
                    navList.forEach(e => {
                        e.classList.add('text-white')
                        e.classList.remove('text-black')
                        e.classList.remove('nl-black')
                        e.classList.add('nl-white')
                    })

                }

            }
        }

        if (window.innerWidth > 1124) {
            window.addEventListener("scroll", handleScroll);
            nav.classList.remove("bg-white", "pt-0", "shadow-md");
            nav.classList.add("bg-transparent", "pt-7", "shadow-none");
            if (navList[0].classList.contains('nl-white')) {
                img.src = "assets/images/goker-gelap.png";
                navList.forEach(e => {
                    e.classList.add('text-white')
                    e.classList.remove('text-black')
                })


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
                    e.classList.remove('text-black')
                    e.classList.add('nl-black')
                    e.classList.remove('nl-white')
                });
            }
        }


        window.addEventListener("resize", function() {
            if (window.innerWidth > 1124) {
                window.addEventListener("scroll", handleScroll);
                nav.classList.remove("bg-white", "pt-0", "shadow-md");
                nav.classList.add("bg-transparent", "pt-7", "shadow-none");
                if (navList[0].classList.contains('nl-white') || navList[0].classList.contains(
                        'nl-black')) {
                    if (currentRoute !== 'login') {
                        img.src = "assets/images/goker-gelap.png";
                        navList.forEach(e => {
                            e.classList.add('text-white')
                            e.classList.remove('text-black')

                            e.classList.remove('nl-black')
                            e.classList.add('nl-white')


                        })
                    }
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
                        e.classList.add('nl-black')
                        e.classList.remove('nl-white')
                    });
                }
            }
        });
    });
</script>
