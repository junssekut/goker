<div class="relative flex flex-col md:flex-row w-10/12 justify-around items-center">
    <div class="absolute w-full h-auto md:h-[224px] z-0 rounded-[35px] inset-0 m-auto"
        style="background-color: {{ $color }}">
    </div>
    <div class="flex-col">
        @if (!$button)
            <h1 class="font-britHeavy text-2xl md:text-3xl px-8 w-full md:w-[450px] pt-8 md:pt-0">
                {{ $title }}
            </h1>
        @endif

        @if ($button)
            <h1 class="font-britHeavy text-2xl p-8 pb-4 w-full md:w-[449px]">
                {{ $title }}
            </h1>
            <p class="font-britHeavy text-base px-8 text-kuningGojek">{{ 'Gabung Sekarang →' }}</p>
        @endif
    </div>
    <img class="object-cover max-w-[380px] md:h-[224px]" src="{{ asset($asset) }}">
</div>
