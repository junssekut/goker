<?php

namespace App\Http\Controllers;

use App\Models\CareerDetail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use Filament\Notifications\Notification;

class CareerController extends Controller
{
    public function downloadCv(CareerDetail $record)
    {
        // Check if CV is uploaded
        if (!$record->cv) {
            // Send notification if CV is not uploaded
            Notification::make()
                ->title('Aksi gagal')
                ->body('Yah, Kayaknya CV nya error deh!')
                ->danger()
                ->send();
            return redirect()->back();
        }

        $filePath = 'cv_uploads/' . basename($record->cv);

        // Check if the file exists in storage
        if (!Storage::disk('public')->exists($filePath)) {
            // Send notification if CV file is not found
            Notification::make()
                ->title('Aksi gagal')
                ->body('Yah, Kayaknya CV nya error deh!')
                ->danger()
                ->send();
            return redirect()->back();
        }

        Notification::make()
            ->title('CV telah di download')
            ->body('Hasil upload dari user berhasil kamu download!')
            ->success()
            ->send();

        // Return the file as a download response
        return Response::download(storage_path('app/public/' . $filePath));
    }
}

