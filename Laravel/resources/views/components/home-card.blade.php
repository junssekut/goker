<div class="relative flex flex-col w-80 h-[508px] items-center py-4">
    <img class="w-[135px] h-[135px]" src="{{ asset($asset) }}">
    <div class="absolute w-80 h-[334px] z-0 rounded-[45px] inset-0 m-auto" style="background-color: {{ $color }}">
    </div>
    <h1 class="font-britHeavy text-2xl px-8">{{ $title }}</h1>
    <div class="h-[2px] w-10/12 bg-white opacity-30 my-4"></div>
    <p class="font-helvetica text-base px-8 leading-5">{{ $description }}</p>
</div>
