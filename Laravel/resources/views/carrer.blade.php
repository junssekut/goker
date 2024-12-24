<x-html>

    <body>
        <x-nav-before></x-nav-before>
        <div class="w-full flex flex-col">
            <div class="absolute inset-0 bg-gradient-to-b from-[#F7CE55] via-[#F7CE55] to-[#FF8F1C] -z-10 h-[120vh]">
            </div>
            <div class="flex flex-row justify-start px-44 h-auto pt-[200px] w-full items-center z-10">
                <div>
                    <img class="w-[90%]" src="{{ asset('assets/images/careers-banner.png') }}" alt=""
                        srcset="">
                </div>
                <div class="flex flex-col gap-y-2">
                    <h1 class="font-britHeavy text-4xl">
                        Kerja penuh tantangan, <br>
                        tinggal penuh kenangan.
                    </h1>
                    <h2 class="font-mn book text-xl">
                        A chance to build dreams, together.
                    </h2>
                </div>
            </div>
            <div class="w-full flex flex-row justify-center px-44 gap-5 mt-10">
                <div class="bg-white rounded-full p-4 w-[75%] flex flex-row justify-start items-center gap-3">
                    <i class="fas fa-search text-gray-400"></i>
                    <input type="text" placeholder="Cari pekerjaanmu (cth. Insinyur, Desainer)"
                        class="focus:outline-none text-gray-600 placeholder-gray-400 w-full pr-3" />
                </div>

                <!-- Dropdown Container -->
                <div class="relative">
                    <!-- Dropdown Input -->
                    <div class="flex flex-row gap-3 items-center bg-white rounded-full p-4">
                        <i class="fas fa-location-dot text-gray-700 "></i>
                        <input id="dropdownInput" type="text" placeholder="Location"
                            class="flex-1 w-full outline-none text-gray-700 placeholder-gray-400" autocomplete="off">
                        <button id="dropdownButton">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 ml-2" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                    </div>

                    <!-- Dropdown Menu -->
                    <div id="dropdownMenu"
                        class="absolute w-full bg-white rounded-xl rounded-bl-xl shadow-xl mt-2 hidden z-10"
                        style="max-height: 170px; overflow-y: auto;">
                        <div class="py-4 pl-4 flex gap-y-4 flex-col">
                            <label class="block wrapper">
                                <input type="checkbox" value="Jakarta" class="location-checkbox mr-2 rounded-full">
                                Jakarta
                            </label>
                            <label class="block">
                                <input type="checkbox" value="Bandung" class="location-checkbox mr-2">
                                Bandung
                            </label>
                            <label class="block">
                                <input type="checkbox" value="Surabaya" class="location-checkbox mr-2">
                                Surabaya
                            </label>
                            <label class="block">
                                <input type="checkbox" value="Medan" class="location-checkbox mr-2">
                                Medan
                            </label>
                            <label class="block">
                                <input type="checkbox" value="Yogyakarta" class="location-checkbox mr-2">
                                Yogyakarta
                            </label>
                            <label class="block">
                                <input type="checkbox" value="Bali" class="location-checkbox mr-2">
                                Bali
                            </label>
                            <label class="block">
                                <input type="checkbox" value="Makassar" class="location-checkbox mr-2">
                                Makassar
                            </label>
                            <label class="block">
                                <input type="checkbox" value="Semarang" class="location-checkbox mr-2">
                                Semarang
                            </label>
                            <label class="block">
                                <input type="checkbox" value="Palembang" class="location-checkbox mr-2">
                                Palembang
                            </label>
                            <label class="block">
                                <input type="checkbox" value="Manado" class="location-checkbox mr-2">
                                Manado
                            </label>
                            <div id="notFound" class="hidden text-center text-sm text-gray-500">
                                Yahh kota tidak ditemukan..
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Filter Section -->
            <div class="flex flex-wrap mt-3 px-44 gap-2 z-0">
                <h1 id="filterTitle" class="hidden">Filters:</h1>
                <div id="selectedFilters" class="flex flex-wrap gap-2 z-0">
                    <!-- Filter tags will appear here -->
                </div>
                <button id="clearAll" class="text-sm text-black hover:text-red-700 hidden z-0 italic hover:underline">
                    Clear All
                </button>
            </div>
            <div class="w-full flex flex-row justify-center px-44 gap-5 mb-10 mt-10 z-10">
                <div class="bg-white h-auto w-full p-10 rounded-3xl shadow-lg">
                    <div class="flex flex-row items-end gap-2 mb-8">
                        <h1 class="font-britBlack text-4xl">Lowongan Pekerjaan</h1>
                        <h2 id="jobCount" class="font-britBlack text-lg text-[#00AA13]"></h2>
                    </div>
                    <!-- Container utama untuk card -->
                    <div id="cardContainer"
                        class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-6 ">
                        <!-- Contoh kartu -->
                       
                        <x-card-carrer class="card" asset="assets/images/icon-helm.svg" title="Technique"
                            location="Jakarta"></x-card-carrer>
                        <x-card-carrer class="card" asset="assets/images/icon-helm.svg" title="Technique"
                            location="Jakarta"></x-card-carrer>
                        <x-card-carrer class="card" asset="assets/images/icon-helm.svg" title="Technique"
                            location="Jakarta"></x-card-carrer>
                        <x-card-carrer class="card" asset="assets/images/icon-helm.svg" title="Technique"
                            location="Jakarta"></x-card-carrer>
                        <x-card-carrer class="card" asset="assets/images/icon-helm.svg" title="Technique"
                            location="Jakarta"></x-card-carrer>
                        <x-card-carrer class="card" asset="assets/images/icon-helm.svg" title="Technique"
                            location="Jakarta"></x-card-carrer>
                        <x-card-carrer class="card" asset="assets/images/icon-helm.svg" title="Technique"
                            location="Jakarta"></x-card-carrer>
                        <x-card-carrer class="card" asset="assets/images/icon-helm.svg" title="Technique"
                            location="Jakarta"></x-card-carrer>
                        <x-card-carrer class="card" asset="assets/images/icon-helm.svg" title="Technique"
                            location="Jakarta"></x-card-carrer>
                        <x-card-carrer class="card" asset="assets/images/icon-helm.svg" title="Technique"
                            location="Jakarta"></x-card-carrer>
                        <x-card-carrer class="card" asset="assets/images/icon-helm.svg" title="Technique"
                            location="Jakarta"></x-card-carrer>
                        <x-card-carrer class="card" asset="assets/images/icon-helm.svg" title="Technique"
                            location="Jakarta"></x-card-carrer>
                        <x-card-carrer class="card" asset="assets/images/icon-helm.svg" title="Technique"
                            location="Jakarta"></x-card-carrer>
                        <x-card-carrer class="card" asset="assets/images/icon-helm.svg" title="Technique"
                            location="Jakarta"></x-card-carrer>
                        <x-card-carrer class="card" asset="assets/images/icon-helm.svg" title="Technique"
                            location="Jakarta"></x-card-carrer>
                        <x-card-carrer class="card" asset="assets/images/icon-helm.svg" title="Technique"
                            location="Jakarta"></x-card-carrer>
                        <x-card-carrer class="card" asset="assets/images/icon-helm.svg" title="Technique"
                            location="Jakarta"></x-card-carrer>
                        <x-card-carrer class="card" asset="assets/images/icon-helm.svg" title="Technique"
                            location="Jakarta"></x-card-carrer>
                        <x-card-carrer class="card" asset="assets/images/icon-helm.svg" title="Technique"
                            location="Jakarta"></x-card-carrer>

                        <!-- Duplikasikan kartu ini sebanyak yang Anda perlukan -->
                    </div>
                    <div id="loadMoreContainer" class="flex flex-row justify-center items-end gap-2 mt-8 mb-2">
                        <button id="loadMore" class="font-britBlack text-xl text-[#00AA13]">
                            Lihat lagi ➜
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <x-footer></x-footer>
        <style>
            #dropdownMenu {
                scrollbar-width: none;
                /* Untuk Firefox */
                -ms-overflow-style: none;
                /* Untuk Internet Explorer 10+ */
            }

            #dropdownMenu::-webkit-scrollbar {
                display: none;
                /* Untuk Chrome, Edge, Safari */
            }

            input[type="checkbox"] {
                position: relative;
                width: 15px;
                height: 15px;
                background-color: #cfcfcf;
                border-radius: 0.25rem;
                /* Smooth edges */
                appearance: none;
                /* Removes default checkbox styling */
                cursor: pointer;
                /* Pointer cursor on hover */
            }

            /* Styling for checked state */
            input[type="checkbox"]:checked {
                background-color: limegreen;
            }

            input[type="checkbox"]::before {
                content: '';
                position: absolute;
                top: 2px;
                left: 6px;
                width: 3px;
                height: 9px;
                border: 1px solid transparent;
                border-left: none;
                border-top: none;
                transform: rotate(45deg) scale(1);
            }


            input[type="checkbox"]:checked::before {
                border-color: #fff;
                animation: checkAnim 0.2s ease;
            }

            /* Keyframes for the checkmark animation */
            @keyframes checkAnim {
                from {
                    transform: rotate(45deg) scale(0);
                }

                to {
                    transform: rotate(45deg) scale(1);
                }
            }

            label {
                color: black;
                font-size: 1.1em;
                user-select: none;
            }
        </style>

        <script>
            // Inisialisasi elemen kartu dan parameter
            const cardContainer = document.getElementById('cardContainer');
            const cards = Array.from(cardContainer.children); // Ambil semua kartu sebagai array
            const loadMoreButton = document.getElementById('loadMore');
            const jobCountElement = document.getElementById('jobCount');

            const cardsPerPage = 8; // Jumlah kartu per "halaman"
            let visibleCards = 8; // Awalnya menampilkan 8 kartu

            // Fungsi untuk memperbarui teks jumlah pekerjaan
            function updateJobCount() {
                const totalCards = cards.length;
                jobCountElement.textContent = `${totalCards} pekerjaan tersedia untuk kamu!`;
            }

            // Fungsi untuk menampilkan kartu sesuai jumlah yang diizinkan
            function showCards() {
                cards.forEach((card, index) => {
                    card.style.display = index < visibleCards ? 'block' : 'none';
                });

                // Sembunyikan tombol jika semua kartu sudah ditampilkan
                if (visibleCards >= cards.length) {
                    loadMoreButton.style.display = 'none';
                }
            }

            // Fungsi untuk menangani klik tombol "Lihat lagi"
            loadMoreButton.addEventListener('click', () => {
                visibleCards += cardsPerPage; // Tambahkan jumlah kartu yang akan ditampilkan
                showCards(); // Perbarui tampilan kartu
            });

            // Panggil fungsi saat halaman pertama kali dimuat
            updateJobCount();
            showCards();

            const inputElement = document.querySelector('input[type="text"]');
            const dropdownButton = document.getElementById('dropdownButton');
            const dropdownMenu = document.getElementById('dropdownMenu');
            const dropdownInput = document.getElementById('dropdownInput');
            const selectedFilters = document.getElementById('selectedFilters');
            const clearAllButton = document.getElementById('clearAll');

            // State to track dropdown visibility
            let isDropdownVisible = false;

            // Toggle dropdown menu
            function toggleDropdown(show) {
                isDropdownVisible = show;
                if (show) {
                    dropdownMenu.classList.remove('hidden');
                } else {
                    dropdownMenu.classList.add('hidden');
                }
            }

            // Add event listener to dropdownButton
            dropdownButton.addEventListener('click', (e) => {
                e.stopPropagation(); // Prevent event from propagating to document click listener
                toggleDropdown(!isDropdownVisible);
            });

            // Open dropdown when input is focused
            dropdownInput.addEventListener('focus', () => {
                toggleDropdown(true);
            });

            // Close dropdown when clicking outside
            document.addEventListener('click', (e) => {
                // Cari elemen dengan class .relative
                const dropdownElement = document.querySelector('.relative');
                if (dropdownElement && !e.target.closest('.relative')) {
                    toggleDropdown(false); // Fungsi toggleDropdown akan menutup dropdown
                }
            });


            // Handle checkbox changes
            const checkboxes = document.querySelectorAll('.location-checkbox');

            checkboxes.forEach((checkbox) => {
                checkbox.addEventListener('change', (e) => {
                    const value = e.target.value;

                    if (e.target.checked) {
                        addFilter(value);
                    } else {
                        removeFilter(value);
                    }
                    toggleClearAllButton();
                });
            });

            // Add a filter
            function addFilter(value) {
                if (!value.trim()) return; // Jika input kosong, tidak melakukan apa-apa

                // Cek apakah filter sudah ada
                const existingFilter = [...selectedFilters.children].find(
                    (filter) => filter.getAttribute('data-value') === value
                );
                if (existingFilter) return;
                const filterTag = document.createElement('div');
                filterTag.className = 'flex items-center bg-[#FFE9AA] text-black px-3 py-1 rounded-md';
                filterTag.innerHTML = `
        <span>${value}</span>
        <button class="ml-2 text-black hover:text-[#FF8F1C]" onclick="removeFilter('${value}')">✕</button>
    `;
                filterTag.setAttribute('data-value', value);
                selectedFilters.appendChild(filterTag);

                toggleClearAllButton();
            }

            inputElement.addEventListener('keypress', (event) => {
                if (event.key === 'Enter') {
                    event.preventDefault(); // Mencegah form submit default jika ada
                    const inputValue = inputElement.value;
                    addFilter(inputValue);
                    inputElement.value = ''; // Kosongkan input setelah submit
                }
            });

            // Remove a filter
            function removeFilter(value) {
                // Cari checkbox yang sesuai dengan filter, jika ada
                const checkbox = document.querySelector(`.location-checkbox[value="${value}"]`);
                if (checkbox) {
                    checkbox.checked = false; // Uncheck checkbox jika ada
                }

                // Cari elemen filter di daftar selectedFilters
                const filterTag = document.querySelector(`[data-value="${value}"]`);
                if (filterTag) {
                    filterTag.remove(); // Hapus elemen filter dari DOM
                }

                toggleClearAllButton();
            }


            // Clear all filters
            clearAllButton.addEventListener('click', () => {
                document.querySelectorAll('.location-checkbox:checked').forEach((checkbox) => {
                    checkbox.checked = false;
                });
                selectedFilters.innerHTML = '';
                toggleClearAllButton();
            });

            // Toggle Clear All button visibility
            function toggleClearAllButton() {
                const filterTitle = document.getElementById('filterTitle'); // Dapatkan elemen h1 Filters

                if (selectedFilters.children.length > 0) {
                    clearAllButton.classList.remove('hidden'); // Tampilkan tombol Clear All
                    filterTitle.classList.remove('hidden'); // Tampilkan tulisan Filters
                } else {
                    clearAllButton.classList.add('hidden'); // Sembunyikan tombol Clear All
                    filterTitle.classList.add('hidden'); // Sembunyikan tulisan Filters
                }
            }

            // Filter dropdown items based on input
            dropdownInput.addEventListener('input', (e) => {
                const searchTerm = e.target.value.toLowerCase();
                let anyVisible = false;

                checkboxes.forEach((checkbox) => {
                    const label = checkbox.closest('label');
                    const text = checkbox.value.toLowerCase();
                    if (text.includes(searchTerm)) {
                        label.style.display = 'block';
                        anyVisible = true;
                    } else {
                        label.style.display = 'none';
                    }
                });

                // Show or hide "not found" message
                if (anyVisible) {
                    notFound.classList.add('hidden');
                } else {
                    notFound.classList.remove('hidden');
                }
            });
        </script>
    </body>

</x-html>
