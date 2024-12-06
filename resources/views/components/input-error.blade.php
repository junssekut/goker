@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-sm text-red-600 pt-2']) }}>
        @foreach ((array) $messages as $message)
            <span class="hint--error" aria-label="{{ $message }}">
                <li>{{ $message }}</li>
            </span>
        @endforeach
    </ul>
@endif
