@props(['asset', 'title', 'location', 'careerId'])

<div class="card rounded-2xl shadow-xl bg-white p-4">
    <img src="{{ asset($asset) }}" alt="UI/UX Designer" class="w-full rounded-xl h-[150px] mb-4" />
    <h2 class="text-lg font-extrabold mb-1 text-gray-800">{{ $title }}</h2>
    <div class="flex flex-row mt-2 mb-7 gap-x-2 items-center">
        <i class="fas fa-location-dot"></i>
        <h3 class="text-sm">{{ $location }}</h3>
    </div>
    <a href="{{ route('career-detail', ['careerId' => $careerId]) }}">
        <button
            class="bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded-lg w-full flex items-center justify-center gap-2 transition duration-300">
            Selengkapnya ➜
        </button>
    </a>

</div>
