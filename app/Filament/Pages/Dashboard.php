<?php
 
namespace App\Filament\Pages;
 
use App\Filament\Resources\CareerDetailResource;
use Filament\Pages\Dashboard as BaseDashboard;
use Filament\Panel;

use App\Filament\Resources\CareerDetailResource\Pages;
use App\Filament\Resources\CareerDetailResource\RelationManagers;
use App\Models\CareerDetail;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class Dashboard extends BaseDashboard
{
    protected static ?string $title = 'Beranda';
    protected ?string $heading = '';
    protected static ?string $icon = 'heroicon-o-home';

    public function getView(): string
    {
        return 'filament.pages.dashboard'; // Path to your custom Blade view
    }
    
    // public function getHeaderWidgets(): array {
    //     return [
    //         CareerDetailResource\Widgets\CareerStatus::class,
    //     ];
    // }

    public function panel(Panel $panel): Panel
    {
        return $panel
            ->widgets([
                
            ])
            ->pages([]);
    }
}