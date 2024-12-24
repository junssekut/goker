<nav wire:ignore
    class="navbar justify-around md:flex md:items-center w-full md:px-44 md:justify-between rounded-bl-2xl rounded-br-2xl
            h-24 md:h-auto fixed pt-7 bg-transparent backdrop-blur-0 transition-all duration-700 shadow-none z-[9999]
            ">
    <div class="flex justify-between items-center md:flex-none">
        <span class="h-24 flex items-center pl-5 md:pl-0">
            <a href="<?php echo e(Route::is('home') ? '#' : route('home')); ?>"><img class="goker-logo w-full h-12 cursor-pointer"
                    src="<?php echo e(Route::is('home') ? asset('assets/images/goker-gelap.png') : asset('assets/images/goker-cerah.png')); ?>"
                    alt="">
            </a>
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
                <a href="<?php echo e(route('home')); ?>"
                    class="<?php echo e(Route::is('home') || Route::is('career-detail') ? 'nav-list nl-white font-britHeavy text-lg text-white' : 'nav-list nl-black font-britHeavy text-lg'); ?>">Beranda</a>
            </div>
            <div class="w-full flex justify-center">
                <a href="<?php echo e(route('career')); ?>"
                    class="<?php echo e(Route::is('home') || Route::is('career-detail') ? 'nav-list nl-white font-britHeavy text-lg text-white' : 'nav-list nl-black font-britHeavy text-lg'); ?>">Karir</a>
            </div>
            <div class="w-full flex justify-center">
                <a href="#"
                    class="<?php echo e(Route::is('home') || Route::is('career-detail') ? 'nav-list nl-white font-britHeavy text-lg text-white' : 'nav-list nl-black font-britHeavy text-lg'); ?>">Life@Gojek</a>
            </div>

        </ul>

        

        <?php if(Route::has('login')): ?>
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('welcome.navigation', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-435612623-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        <?php endif; ?>

    </div>

</nav>

<script>
    initNav()

    function initNav() {
        const gCerah = "<?php echo e(asset('assets/images/goker-cerah.png')); ?>";
        const gGelap = "<?php echo e(asset('assets/images/goker-gelap.png')); ?>";
        const isLoggedIn = <?php echo json_encode(Auth::check(), 15, 512) ?>;
        let uIcon;
        if (isLoggedIn) {
            uIcon = document.querySelector('.u-icon')
        }
        const currentRoute = <?php echo json_encode(Route::currentRouteName(), 15, 512) ?>;
        let nav = document.querySelector('.navbar');
        let img = document.querySelector('.goker-logo');
        let navList = document.querySelectorAll('.nav-list')

        function handleScroll() {
            let image = document.querySelector('.navbar__image');
            let list = document.querySelectorAll('.nav-list');


            if (window.scrollY > 10) {
                nav.classList.add("bg-white", "pt-0", "shadow-md");
                nav.classList.remove("bg-transparent", "pt-7", "shadow-none");
                if (navList[0].classList.contains('nl-white')) {
                    img.src = gCerah
                    navList.forEach(e => {
                        e.classList.remove('text-white')
                        e.classList.add('text-black')
                        e.classList.add('nl-black')
                        e.classList.remove('nl-white')
                    });
                    if (isLoggedIn) {
                        uIcon.classList.remove('text-white')
                        uIcon.classList.add('text-black')
                    }


                }
            } else {
                nav.classList.add("bg-transparent", "pt-7", "shadow-none");
                nav.classList.remove("bg-white", "pt-0", "shadow-md");
                if (navList[0].classList.contains('nl-white') || navList[0].classList.contains('nl-black')) {
                    if (!(currentRoute === 'career')) {
                        img.src = gGelap
                        navList.forEach(e => {
                            e.classList.add('text-white')
                            e.classList.remove('text-black')
                            e.classList.remove('nl-black')
                            e.classList.add('nl-white')
                        })
                        if (isLoggedIn) {
                            uIcon.classList.remove('text-black')
                            uIcon.classList.add('text-white')
                        }
                    }


                }

            }
        }

        if (window.innerWidth > 1124) {
            window.addEventListener("scroll", handleScroll);
            nav.classList.remove("bg-white", "pt-0", "shadow-md");
            nav.classList.add("bg-transparent", "pt-7", "shadow-none");
            if (navList[0].classList.contains('nl-white')) {
                img.src = gGelap
                navList.forEach(e => {
                    e.classList.add('text-white')
                    e.classList.remove('text-black')
                })
                if (isLoggedIn) {
                    uIcon.classList.remove('text-black')
                    uIcon.classList.add('text-white')
                }

            }
        } else {
            window.removeEventListener("scroll", handleScroll);
            nav.classList.add("bg-white", "pt-0", "shadow-md");
            nav.classList.remove("bg-transparent", "pt-7", "shadow-none");
            if (navList[0].classList.contains('nl-white')) {
                img.src = gCerah
                navList.forEach(e => {
                    e.classList.remove('text-white')
                    e.classList.add('text-black')
                    e.classList.remove('text-black')
                    e.classList.add('nl-black')
                    e.classList.remove('nl-white')
                });
                if (isLoggedIn) {
                    uIcon.classList.remove('text-white')
                    uIcon.classList.add('text-black')
                }
            }

        }


        window.addEventListener("resize", function() {
            if (window.innerWidth > 1124) {
                window.addEventListener("scroll", handleScroll);
                nav.classList.remove("bg-white", "pt-0", "shadow-md");
                nav.classList.add("bg-transparent", "pt-7", "shadow-none");
                if (!(currentRoute === 'login' || currentRoute === 'register' || currentRoute === 'career')) {

                    if (navList[0].classList.contains('nl-white') || navList[0].classList.contains(
                            'nl-black')) {
                        img.src = gGelap
                        navList.forEach(e => {
                            e.classList.add('text-white')
                            e.classList.remove('text-black')
                            e.classList.remove('nl-black')
                            e.classList.add('nl-white')
                        })
                        if (isLoggedIn) {
                            uIcon.classList.remove('text-black')
                            uIcon.classList.add('text-white')
                        }

                    }
                } else {
                    if (navList[0].classList.contains('nl-white') || navList[0].classList.contains(
                            'nl-black')) {
                        img.src = gCerah
                        navList.forEach(e => {
                            e.classList.remove('text-white')
                            e.classList.add('text-black')
                            e.classList.add('nl-black')
                            e.classList.remove('nl-white')
                        })
                    }
                }


            } else {
                window.removeEventListener("scroll", handleScroll);
                nav.classList.add("bg-white", "pt-0", "shadow-md");
                nav.classList.remove("bg-transparent", "pt-7", "shadow-none");
                if (navList[0].classList.contains('nl-white')) {
                    img.src = gCerah
                    navList.forEach(e => {
                        e.classList.remove('text-white')
                        e.classList.add('text-black')
                        e.classList.add('nl-black')
                        e.classList.remove('nl-white')
                    });
                    if (isLoggedIn) {
                        uIcon.classList.remove('text-white')
                        uIcon.classList.add('text-black')
                    }
                }
            }
        });
    }
</script>
<?php /**PATH C:\Kodingan\Laravel\gokerBaruBanget\goker\Laravel\resources\views/components/nav-before.blade.php ENDPATH**/ ?>