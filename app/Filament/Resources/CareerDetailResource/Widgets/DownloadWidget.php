<?php

namespace App\Filament\Resources\CareerDetailResource\Widgets;

use Filament\Widgets\Widget;
use Illuminate\Database\Eloquent\Model; // Import Laravel's base Model class
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;

class DownloadWidget extends Widget
{
    public ?Model $record = null;

    protected static string $view = 'filament.resources.career-detail-resource.widgets.download-widget';

    public function mount(Model $record): void
    {
        $this->record = $record;
    }

    public function download()
    {
        if (!$this->record || !$this->record->cv) {
            session()->flash('error', 'CV not uploaded.');
            return;
        }

        $filePath = 'cv_uploads/' . basename($this->record->cv);

        if (!Storage::disk('public')->exists($filePath)) {
            session()->flash('error', 'CV file not found.');
            return;
        }

        return Response::download(storage_path('app/public/' . $filePath));
    }

    protected function getViewData(): array
    {
        return [
            'record' => $this->record,
        ];
    }
}
