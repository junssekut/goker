<?php

namespace App\Filament\Admin\Resources\UserResource\Pages;

use App\Filament\Admin\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\HtmlString;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DateTimePicker;


class ListUsers extends ListRecords
{
    protected static string $resource = UserResource::class;

    public function getTitle(): string|\Illuminate\Contracts\Support\Htmlable
    {
        $tab = Session::get('active_tab', 'User'); 
         return new HtmlString('<span style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.9);" class=" text-white">Goker '. strtoupper($tab) . '</span>');
        
    }

    protected function getHeaderActions(): array
    {
        $tab = Session::get('active_tab', 'User'); 
        if($tab == 'hrd') {
            return [
                Actions\CreateAction::make()
                ->form(fn (Forms\Form $form) => $form
                    ->schema([
                        Forms\Components\Grid::make(2)
                        ->schema([
                            // Name field - Required
                        TextInput::make('name')
                        ->required()
                        ->label('Name'),

                    // Email field - Required and validated as an email
                        TextInput::make('email')
                            ->required()
                            ->email()
                            ->label('Email'),

                        // Password field - Required and validated as a password
                         TextInput::make('password')
                            ->password() // This marks the field as a password input
                            ->required()
                            ->label('Password'),
                        
                        TextInput::make('role')
                            ->required() // Set the role to 'hrd'
                            ->label('Role')
                            ->default('hrd')
                            // ->disabled()     // Disable the field so the user cannot change it
                    ])
                ])
                )
                ->size('lg')
                ->extraAttributes(['class' => 'w-[120px] text-4xl shadow-lg'])
                ->color('primary')
                ->label('New HRD') 
            ];
        } else {
            return [];
        }
    }
}
