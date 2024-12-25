@props(['messages'])

{{-- @if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-sm text-red-600 pt-2']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif --}}

@if ($messages)
    <ul x-data="{ show: false }" x-transition {{ $attributes->merge(['class' => 'text-sm text-red-600 pt-2']) }}
        x-init="show = true" @input_error.window="show = true; setTimeout(() => show = false, 3000)"
        x-show="show; setTimeout(() => show = false, 3000)">
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
