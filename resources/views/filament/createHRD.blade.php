<div class="flex justify-end">
    {{-- {{ app(App\Filament\Admin\Resources\UserResource\Pages\ListUsers::class)->createHRD() }} --}}

    @foreach (app(App\Filament\Admin\Resources\UserResource\Pages\ListUsers::class)->createHRD() as $action)
        {{ $action->render() }}
    @endforeach
</div>
