<!-- resources/views/filament/sidebar-avatar.blade.php -->

<div class="flex flex-col items-center gap-4">
    <img src="{{ Auth::user()->profile->gender === 'M' ? asset('assets/images/orang2.svg') : asset('assets/images/orang1.svg') }}"
        alt="User Avatar" class="w-24 h-24">
    <span class="text-lg">Hai, {{ Auth::user()->profile->name }}!</span>

</div>
