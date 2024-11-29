<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GoKer | Berkarir Bersama Gojek</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
    <link rel="icon" href="{{ asset('assets/images/goker-icon.png') }}" type="image/x-icon">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="/css/style.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script defer>
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

        function DropDown(e) {
            let list = document.querySelector('.nav-right');

            if (e.name === 'menu') {
                e.name = "close";
                list.classList.remove('top-[-200px]');
                list.classList.add('top-[80px]');
                list.classList.add('opacity-100');
            } else {
                e.name = "menu";
                list.classList.remove('top-[80px]');
                list.classList.add('top-[-200px]');
                list.classList.remove('opacity-100');
            }


        }
    </script>
    {{-- TODO: RAPIHIN FIX Z-INDEX --}}
    <style>
        * {
            z-index: 100;
        }
    </style>
</head>

{{ $slot }}


</html>
