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
        function DropDown(e) {
            let list = document.querySelector('.nav-right');

            if (e.name === 'menu') {
                e.name = "close";
                // list.classList.remove('top-[-200px]');
                // list.classList.add('top-[80px]');
                list.classList.add('h-auto');
                list.classList.add('opacity-100');
            } else {
                e.name = "menu";
                // list.classList.remove('top-[80px]');
                // list.classList.add('top-[-200px]');
                list.classList.remove('h-auto');
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

    <script
        src="
                                                                                                                                                                                                https://cdn.jsdelivr.net/npm/hint.css@3.0.0/Gruntfile.min.js
                                                                                                                                                                                                ">
    </script>
    <link href="
        https://cdn.jsdelivr.net/npm/hint.css@3.0.0/hint.min.css
        " rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/selectize@0.12.6/dist/css/selectize.default.css">
    <script src="https://cdn.jsdelivr.net/npm/selectize@0.12.6/dist/js/standalone/selectize.min.js"></script>


    <style>
        /* Custom error shake animation */
        @keyframes error-shake {
            0% {
                transform: translateX(0);
            }

            25% {
                transform: translateX(-5px);
            }

            50% {
                transform: translateX(5px);
            }

            75% {
                transform: translateX(-5px);
            }

            100% {
                transform: translateX(0);
            }
        }

        .animate-error-shake {
            animation: error-shake 0.3s ease-out;
        }
    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf.min.js" defer></script>

</head>

{{ $slot }}

</html>
