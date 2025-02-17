<?php

namespace App\Filament\User\Resources\CareerDetailResource\Pages;

use App\Filament\User\Resources\CareerDetailResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class ListCareerDetails extends ListRecords
{
    protected static string $resource = CareerDetailResource::class;
    public function getTitle(): string|\Illuminate\Contracts\Support\Htmlable
    {
        $tab = Session::get('active_tab', 'User'); 
         return new HtmlString('');
        //<span style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.9);" class="text-white">Histori lamaran ' . Auth::user()->name . '</span>
    }

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
