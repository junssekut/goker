<div class="grid gap-4 grid-cols-2 md:grid-cols-1">
    @foreach ($stats as $stat)
        @php
            // Static color mapping for status
            $statusColors = [
                'CV Diterima' => ['text-[#00AA13]', 'bg-[#E2F2D0]', 'ring-[#E2F2D0]'], // Text: #00AA13, Background: #E2F2D0
                'Psikotes' => ['text-[#00AFDE]', 'bg-[#D0EBF2]', 'ring-[#D0EBF2]'], // Text: #00AFDE, Background: #D0EBF2
                'Wawancara' => ['text-[#C62029]', 'bg-[#F2D8D0]', 'ring-[#F2D8D0]'], // Text: #C62029, Background: #F2D8D0
                'Kesehatan' => ['text-[#94028B]', 'bg-[#E9D0F2]', 'ring-[#E9D0F2]'], // Text: #94028B, Background: #E9D0F2
                'Diterima' => ['text-[#FF009C]', 'bg-[#F2D0E1]', 'ring-[#F2D0E1]'], // Text: #FF009C, Background: #F2D0E1
            ];

            // Fetch the colors for the current status
            $colors = $statusColors[$stat['label']] ?? ['bg-[#000000]', 'text-[#FFFFFF]']; // Default to black/white if not found
            $textColor = $colors[0]; // First color for text
            $backgroundColor = $colors[1]; // Second color for background
            $ringColor = $colors[2];
        @endphp

        <div class="py-4 px-12 {{ $backgroundColor }} shadow rounded-lg flex flex-col items-center justify-between">
            <div class="text-center flex flex-col gap-1">
                <h4 class="text-md font-medium {{ $textColor }}">{{ $stat['label'] }}</h4>
                <p class="text-4xl font-semibold {{ $textColor }}">{{ $stat['value'] }}</p>
            </div>
            <div class="flex -space-x-2">
                @foreach (collect($stat['avatars'])->take(3) as $avatar)
                    <img class="inline-block h-9 w-9 rounded-full ring-2 {{ $ringColor }}" src="{{ $avatar }}"
                        alt="Avatar">
                @endforeach

                @if ($stat['count'] > 3)
                    <span
                        class="flex h-9 w-9 rounded-full bg-gray-300 text-xs text-center {{ $textColor }} ring-2 {{ $ringColor }} items-center justify-center pointer-events-none">
                        +{{ $stat['count'] - 3 }}
                    </span>
                @endif
            </div>
        </div>
    @endforeach

</div>
