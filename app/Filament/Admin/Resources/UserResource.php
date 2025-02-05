<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\UserResource\Pages;
use Illuminate\Support\Facades\Session;
use App\Filament\Admin\Pages\Dashboard;
use App\Models\User;
use Filament\Actions;
use Filament\Forms;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function shouldRegisterNavigation(): bool
{
    return false; 
}

    public static function form(Form $form): Form
    {
        return $form
            
            ->schema([
                Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\DateTimePicker::make('email_verified_at'),
                Forms\Components\TextInput::make('password')
                    ->password()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('role')
                    ->required()
                    ->maxLength(255)
                    ->default('user'),
                        
               
            ]);
    }

     public static function getFilteredQuery()
    {
        $tab = Session::get('active_tab', 'User'); // Ambil dari session

        return match ($tab) {
            'hrd' => User::where('role', 'hrd'),
            default => User::where('role', 'user'),
        };
    }

    

    public static function table(Table $table): Table
    {

        return $table
            ->deferLoading()
            ->striped() 
            ->query(fn () => self::getFilteredQuery())
            ->emptyStateHeading('Belum ada user')
            ->emptyStateDescription('Yuk mulai manage user!')
            ->columns([
                Tables\Columns\ImageColumn::make('')
                    ->circular()
                    ->size(32)
                    ->getStateUsing(function ($record) {
                        return $record->profile->gender === 'M' 
                            ? asset('assets/images/orang2.svg') 
                            : asset('assets/images/orang1.svg');
                    }),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Joined for')
                    ->getStateUsing(function ($record) {
                       
                    return $record->created_at->diffForHumans(now(), true);
                }),
                Tables\Columns\TextColumn::make('role')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),

            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ;
            
    }

    //  protected function getHeaderActions(): array
    // {
        
    // }

    

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            // 'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
