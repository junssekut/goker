<div>
    <?php if (isset($component)) { $__componentOriginala8160e11c9697e102943c639baed6e09 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala8160e11c9697e102943c639baed6e09 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.nav-before','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('nav-before'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala8160e11c9697e102943c639baed6e09)): ?>
<?php $attributes = $__attributesOriginala8160e11c9697e102943c639baed6e09; ?>
<?php unset($__attributesOriginala8160e11c9697e102943c639baed6e09); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala8160e11c9697e102943c639baed6e09)): ?>
<?php $component = $__componentOriginala8160e11c9697e102943c639baed6e09; ?>
<?php unset($__componentOriginala8160e11c9697e102943c639baed6e09); ?>
<?php endif; ?>
    <div class="w-full flex flex-col">
        <div class="absolute inset-0 bg-gradient-to-b from-[#F7CE55] via-[#F7CE55] to-[#FF8F1C] -z-10 h-[120vh]">
        </div>
        <div class="flex flex-col lg:flex-row justify-start lg:px-44 px-6 h-auto pt-[200px] w-full items-center z-10">
            <div>
                <img class="w-auto max-w-full" src="<?php echo e(asset('assets/images/careers-banner.png')); ?>" alt=""
                    srcset="">
            </div>
            <div class="flex flex-col gap-y-2 mt-6 lg:mt-0">
                <h1 class="font-britHeavy text-2xl lg:text-4xl">
                    Kerja penuh tantangan, <br>
                    tinggal penuh kenangan.
                </h1>
                <h2 class="font-mn book text-lg lg:text-xl">
                    A chance to build dreams, together.
                </h2>
            </div>
        </div>
        <div class="w-full flex flex-col lg:flex-row justify-center lg:px-44 px-6 gap-5 mt-10">
            <div class="bg-white rounded-full p-4 w-full lg:w-[75%] flex flex-row justify-start items-center gap-3">
                <i class="fas fa-search text-gray-400"></i>
                <input type="text" placeholder="Cari pekerjaanmu (cth. Insinyur, Desainer)"
                    class="focus:outline-none text-gray-600 placeholder-gray-400 w-full pr-3" />
            </div>
            <!-- Dropdown Container -->
            <div class="relative w-full lg:w-auto">
                <div class="flex flex-row gap-3 items-center bg-white rounded-full p-4">
                    <i class="fas fa-location-dot text-gray-700"></i>
                    <input id="dropdownInput" type="text" placeholder="Location"
                        class="flex-1 w-full outline-none text-gray-700 placeholder-gray-400" autocomplete="off">
                    <button id="dropdownButton">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 ml-2" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                </div>
                <!-- Dropdown Menu -->
                <div id="dropdownMenu"
                    class="absolute w-full bg-white rounded-xl rounded-bl-xl shadow-xl mt-2 hidden z-10"
                    style="max-height: 170px; overflow-y: auto;">
                    <div class="py-4 pl-4 flex gap-y-4 flex-col">
                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $distinctLocations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <label class="block wrapper">
                                <input type="checkbox" value="<?php echo e($c); ?>"
                                    class="location-checkbox mr-2 rounded-full">
                                <?php echo e($c); ?>

                            </label>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                        <div id="notFound" class="hidden text-center text-sm text-gray-500">
                            Yahh kota tidak ditemukan..
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div wire:ignore class="flex flex-wrap mt-3 lg:px-44 px-6 gap-2 z-0">
            <h1 id="filterTitle" class="hidden">Filters:</h1>
            <div id="selectedFilters" class="flex flex-wrap gap-2 z-0"></div>
            <button id="clearAll" class="text-sm text-black hover:text-red-700 hidden z-0 italic hover:underline"
                onclick="callAllFilter();">
                Clear All
            </button>
        </div>
        <div class="w-full flex justify-center lg:px-44 px-6 mb-10 mt-10 z-10">
            <div class="bg-white h-auto w-full p-6 xl:p-10 rounded-3xl shadow-lg">
                <div class="flex flex-col md:flex-row items-start md:items-end gap-2 mb-8">
                    <h1 class="font-britBlack text-2xl lg:text-4xl">Lowongan Pekerjaan</h1>
                    <h2 id="jobCount" class="font-britBlack text-lg text-[#00AA13]"><?php echo e($count); ?> pekerjaan
                        tersedia untuk kamu!</h2>
                </div>
                <!-- Grid Cards -->
                <div id="cardContainer" class="grid grid-cols-1 sm:grid-cols-3  xl:grid-cols-4 gap-6">
                    <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $careers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $career): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <?php if (isset($component)) { $__componentOriginalb1a053a70c080a4803dea00eeba05c3c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb1a053a70c080a4803dea00eeba05c3c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card-carrer','data' => ['class' => 'card','asset' => ''.e(asset('assets/images/icon-helm.svg')).'','title' => ''.e($career->name).'','location' => ''.e($career->location).'','careerId' => $career->id]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('card-carrer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'card','asset' => ''.e(asset('assets/images/icon-helm.svg')).'','title' => ''.e($career->name).'','location' => ''.e($career->location).'','careerId' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($career->id)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb1a053a70c080a4803dea00eeba05c3c)): ?>
<?php $attributes = $__attributesOriginalb1a053a70c080a4803dea00eeba05c3c; ?>
<?php unset($__attributesOriginalb1a053a70c080a4803dea00eeba05c3c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb1a053a70c080a4803dea00eeba05c3c)): ?>
<?php $component = $__componentOriginalb1a053a70c080a4803dea00eeba05c3c; ?>
<?php unset($__componentOriginalb1a053a70c080a4803dea00eeba05c3c); ?>
<?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <p class="font-britBlack">Maaf ya.. Nampaknya belum ada pekerjaan nih..</p>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </div>
                <div id="loadMoreContainer" class="flex flex-row justify-center items-end gap-2 mt-8 mb-2">
                    <button id="loadMore" class="font-britBlack text-xl text-[#00AA13]">
                        Lihat lagi ➞
                    </button>
                </div>
            </div>
        </div>
    </div>
    <?php if (isset($component)) { $__componentOriginal8a8716efb3c62a45938aca52e78e0322 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a8716efb3c62a45938aca52e78e0322 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.footer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $attributes = $__attributesOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $component = $__componentOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__componentOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>

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
        // console.log(Livewire);
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


        // console.log(Live)

        function addFilter(value) {
            if (!value.trim()) return; // Prevent adding empty filters

            // Check if the filter already exists
            const existingFilter = [...selectedFilters.children].find(
                (filter) => filter.getAttribute('data-value') === value
            );
            if (existingFilter) return;

            // Create a new filter tag
            const filterTag = document.createElement('div');
            filterTag.className = 'flex items-center bg-[#FFE9AA] text-black px-3 py-1 rounded-md';
            filterTag.innerHTML = `
        <span class="filters">${value}</span>
        <button class="ml-2 text-black hover:text-[#FF8F1C]" onclick="removeFilter('${value}')">✕</button>
    `;
            filterTag.setAttribute('data-value', value);
            selectedFilters.appendChild(filterTag);

            // Call the filterCareers method via Livewire


            // Update the "Clear All" button visibility
            // Livewire.trigger('filterCareers', callAllFilter());

            callAllFilter()
            toggleClearAllButton();
        }

        let increment = 0;

        function callAllFilter() {
            // console.log('test')
            let filters = document.querySelectorAll('.filters')

            let filterArray = [];
            filters.forEach((filter) => {
                filterArray.push(filter.textContent)
            })
            // console.log(JSON.stringify(filterArray))
            // console.log(filterArray.length)
            if (filterArray.length == 0) {
                filterArray.push('All')
                Livewire.dispatch('filterCareers', [filterArray])
            } else {
                Livewire.dispatch('filterCareers', [filterArray])
            }
        }


        inputElement.addEventListener('keypress', (event) => {
            if (event.key === 'Enter') {
                event.preventDefault(); // Mencegah form submit default jika ada
                const inputValue = inputElement.value;
                addFilter(inputValue);
                // callAllFilter()
                inputElement.value = '';
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

            callAllFilter();

            toggleClearAllButton();
        }


        // Clear all filters
        clearAllButton.addEventListener('click', () => {
            document.querySelectorAll('.location-checkbox:checked').forEach((checkbox) => {
                checkbox.checked = false;
            });
            selectedFilters.innerHTML = '';
            callAllFilter();
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
    

</div>
<?php /**PATH C:\Kodingan\Laravel\gokerBaruBanget\goker\resources\views/livewire/career.blade.php ENDPATH**/ ?>