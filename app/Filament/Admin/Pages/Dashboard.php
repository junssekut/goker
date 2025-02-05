<?php
 
namespace App\Filament\Admin\Pages;
 
use App\Filament\Resources\CareerDetailResource;
use Filament\Pages\Dashboard as BaseDashboard;
use Filament\Panel;
use Illuminate\Support\Facades\Session;
use App\Models\User;

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

    public ?string $tabs;

    public function mount()
    {
        $this->tabs = Session::get('active_tab', 'User'); // Ambil dari session, default "User"
    }

    public function setTab($tab)
    {
        $this->tabs = $tab;
        Session::put('active_tab', $tab); // Simpan state tab ke session
    }

    public function getView(): string
    {
        return 'filament.pages.dashboardAdmin'; // Path to your custom Blade view
    }

    
    
    // public function getHeaderWidgets(): array {
    //     return [
    //         CareerDetailResource\Widgets\CareerStatus::class,
    //     ];
    // }

    // public static function table(Table $table):Table  //: Table 
    // {
        
    //     return $table
    //         ->deferLoading()
    //         ->query(User::query()->where('role', '=', 'user'))
    //         ->emptyStateHeading('Belum ada user')
    //         ->emptyStateDescription('Yuk mulai manage user!')
    //         ->columns([
    //             Tables\Columns\ImageColumn::make('')
    //                 ->circular()
    //                 ->size(32)
    //                 ->getStateUsing(function ($record) {
    //                     return $record->profile->gender === 'M' 
    //                         ? asset('assets/images/orang2.svg') 
    //                         : asset('assets/images/orang1.svg');
    //                 }),
    //             Tables\Columns\TextColumn::make('name')
    //                 ->searchable(),
    //             Tables\Columns\TextColumn::make('email')
    //                 ->searchable(),
    //             Tables\Columns\TextColumn::make('email_verified_at')
    //                 ->dateTime()
    //                 ->sortable(),
    //             Tables\Columns\TextColumn::make('role')
    //                 ->searchable(),
    //             Tables\Columns\TextColumn::make('created_at')
    //                 ->dateTime()
    //                 ->sortable()
    //                 ->toggleable(isToggledHiddenByDefault: true),
    //             Tables\Columns\TextColumn::make('updated_at')
    //                 ->dateTime()
    //                 ->sortable()
    //                 ->toggleable(isToggledHiddenByDefault: true),
    //         ])
    //         ->filters([
    //             //
    //         ])
    //         ->actions([
    //             Tables\Actions\EditAction::make(),
    //         ])
    //         ->bulkActions([
    //             Tables\Actions\BulkActionGroup::make([
    //                 Tables\Actions\DeleteBulkAction::make(),
    //             ]),
    //         ]);
    // }

    public function panel(Panel $panel): Panel
    {
        return $panel
            ->widgets([
                
            ])
            ->pages([]);
    }
}