{{-- resources/views/filament/pages/view-career-detail.blade.php --}}

<x-filament::page>
    @livewire('notifications')

    <div class="bg-inject bg-user-detail"></div>

    <x-filament::breadcrumbs :breadcrumbs="$this->getBreadcrumbs()" />

    <div class="space-y-6">
        {{-- Profile Widget --}}
        @livewire(\App\Filament\Resources\CareerDetailResource\Widgets\ProfileWidget::class, ['record' => $record])

        {{-- Information Widget --}}
        @livewire(\App\Filament\Resources\CareerDetailResource\Widgets\InformationWidget::class, ['record' => $record])

        {{-- Overview Widget --}}
        @livewire(\App\Filament\Resources\CareerDetailResource\Widgets\OverviewWidget::class, ['record' => $record])
    </div>
</x-filament::page>
