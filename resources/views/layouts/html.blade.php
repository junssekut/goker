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
</head>

{{ $slot }}


</html>
