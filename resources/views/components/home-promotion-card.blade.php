<div class="relative flex flex-row w-10/12 justify-around items-center">
    <div class="absolute w-full h-[224px] z-0 rounded-[35px] inset-0 m-auto"
        style="background-color: {{ $color }}">
    </div>
    <div class="flex-col">
        @if (!$button)
            <h1 class="font-britHeavy text-3xl px-8 w-[450px]">
                {{ $title }}
            </h1>
        @endif

        @if ($button)
            <h1 class="font-britHeavy text-2xl p-8 pb-4 w-[449px]">
                {{ $title }}
            </h1>
            <p class="font-britHeavy text-base px-8 text-kuningGojek">{{ 'Gabung Sekarang →' }}</p>
        @endif
    </div>
    <img class="w-[380px] h-[224px]" src="{{ asset($asset) }}">
</div>
