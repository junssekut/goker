<div class="">
    {{ $infolist }}

    <div class="bg-white border shadow-lg rounded-xl mt-4">
        <div class="flex flex-col md:flex-row justify-evenly items-center py-8">
            <div
                class="flex flex-col justify-center items-center bg-[#E2F2D0] text-[#00AA13] w-48 h-32 rounded-2xl shadow-lg">
                <p class="text-2xl">CV</p>
                <span class="text-3xl font-semibold">{{ round($record->score) }}%</span>
            </div>

            <div
                class="flex flex-col justify-center items-center bg-[#D0EBF2] text-[#00AFDE] w-48 h-32 rounded-2xl shadow-lg">
                <p class="text-2xl">Psikotes</p>
                <span class="text-3xl font-semibold">{{ round($record->psychological_test_score) }}%</span>
            </div>

            <div
                class="flex flex-col justify-center items-center bg-[#F2D8D0] text-[#C62029] w-48 h-32 rounded-2xl shadow-lg">
                <p class="text-2xl">Wawancara</p>
                <span class="text-3xl font-semibold">{{ round($record->interview_score) }}%</span>
            </div>

            <div
                class="flex flex-col justify-center items-center bg-[#E9D0F2] text-[#94028B] w-48 h-32 rounded-2xl shadow-lg">
                <p class="text-2xl">Kesehatan</p>
                <span class="text-3xl font-semibold">{{ round($record->mcu_score) }}%</span>
            </div>
        </div>

        <div class="p-4">
            {{ $form }}
        </div>
    </div>
</div>
{{-- <div class="flex flex-col bg-white shadow-md rounded-lg p-6 gap-8">
    <div class="flex flex-row items-center gap-2">
        <x-heroicon-o-user class="w-6 h-6" />
        <h2 class="text-3xl">Overview</h2>
    </div>

    <div class="flex flex-row justify-evenly py-8">
        <div class="flex flex-col justify-center items-center bg-[#E2F2D0] text-[#00AA13] w-48 h-32 rounded-2xl">
            <p class="text-2xl">CV</p>
            <span class="text-3xl">{{ round($record->score) }}%</span>
        </div>

        <div class="flex flex-col justify-center items-center bg-[#D0EBF2] text-[#00AFDE] w-48 h-32 rounded-2xl">
            <p class="text-2xl">Psikotes</p>
            <span class="text-3xl">{{ round($record->psychological_test_score) }}%</span>
        </div>

        <div class="flex flex-col justify-center items-center bg-[#F2D8D0] text-[#C62029] w-48 h-32 rounded-2xl">
            <p class="text-2xl">Wawancara</p>
            <span class="text-3xl">{{ round($record->interview_score) }}%</span>
        </div>

        <div class="flex flex-col justify-center items-center bg-[#E9D0F2] text-[#94028B] w-48 h-32 rounded-2xl">
            <p class="text-2xl">Kesehatan</p>
            <span class="text-3xl">{{ round($record->mcu_score) }}%</span>
        </div>

    </div>

    <div class="flex flex-row">
        <x-heroicon-o-information-circle class="w-12 h-12 text-[#00AA13] mr-4" />
        {{-- <div class="flex flex-row items-center gap-2">
            <h2 class="text-3xl">AI Review</h2>
        </div> --}}

{{-- <div class="border-2 border-[#00AA13] p-6 mr-4 w-full rounded-xl">
    <p>{{ $record->review }}</p>
</div>
</div>

</div> --}}
