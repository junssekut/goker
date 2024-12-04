<x-html>

    <body class="h-screen relative">

        <x-navWhile></x-navWhile>


        <div class="bg-gradient-to-t from-biruGojek to-white flex justify-center relative h-full">
            <div class="absolute w-[20vw] h-[20vw] bg-gray-50 bg-opacity-30 rounded-full top-[26vh] left-[27vw]">
            </div>
            <div class="absolute w-[20vw] h-[20vw] bg-gray-50 bg-opacity-30 rounded-full top-[60vh] right-[27vw]">
            </div>

            <div class="latar pt-40 w-full flex justify-center h-[90%] max-h-[680px]">
                <livewire:dataDiri />
            </div>
        </div>
        <div class="h-auto w-44 font-mnbold text-xs absolute bottom-0 right-0 pr-5 pb-5">
            <p class="text-white">Duh nanti aja deh! <a href="#" class="text-kuningGojek underline">Skip</a>
            </p>
        </div>
    </body>
    @livewireScripts

    {{-- SCRIPT --}}


    <script>
        const nextButton = document.getElementById('hideButton');
        const form1 = document.getElementById('form1');
        const form2 = document.getElementById('form2');

        let formValid = false;

        // Listen for Livewire form validation
        Livewire.on('formValidated', () => {
            formValid = true; // Form sudah valid
        });

        nextButton.addEventListener('click', (event) => {
            if (!formValid) {
                event.preventDefault(); // Cegah aksi lanjut jika form tidak val
            } else if (formValid) {
                // Tampilkan form berikutnya
                form1.classList.add('hidden');
                form2.classList.remove('hidden');
                form2.classList.add('flex');
            }
        });
        $('#select-beast').selectize({
            create: true,
            sortField: {
                field: 'text',
                direction: 'asc'
            }
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const selectElement = document.getElementById('jenisPendidikan');
            const placeholderElement = document.getElementById('pendidikan');

            // Hide placeholder when an option is selected
            selectElement.addEventListener('change', () => {
                if (selectElement.value) {
                    placeholderElement.classList.add('hidden');
                } else {
                    placeholderElement.classList.remove('hidden');
                }
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const selectElement = document.getElementById('jenis-kelamin');
            const placeholderElement = document.getElementById('pilihan');

            // Hide placeholder when an option is selected
            selectElement.addEventListener('change', () => {
                if (selectElement.value) {
                    placeholderElement.classList.add('hidden');
                } else {
                    placeholderElement.classList.remove('hidden');
                }
            });
        });
    </script>
</x-html>
