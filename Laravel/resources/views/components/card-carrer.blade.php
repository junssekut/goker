@props(['asset', 'title', 'location', 'careerId'])

<div class="card rounded-2xl shadow-xl bg-white p-4">
    <img src="{{ asset($asset) }}" alt="UI/UX Designer" class="w-full rounded-xl h-[150px] mb-4" />
    <h2 class="text-lg font-britBlack mb-1 text-gray-800 line-clamp-2 md:min-h-[3.46rem]">{{ $title }}</h2>
    <div class="flex flex-row mt-2 mb-7 gap-x-2 items-center">
        <i class="fas fa-location-dot"></i>
        <h3 class="text-sm font-mnbook">{{ $location }}</h3>
    </div>
    <a href="{{ route('career-detail', ['careerId' => $careerId]) }}">
        <button
            class="bg-ijoGojek hover:bg-kuningTuaGojek text-white font-britBlack py-2 px-4 rounded-lg w-full flex items-center justify-center gap-2 transition duration-300 text-sm">
            Selengkapnya ➜
        </button>
    </a>

</div>
