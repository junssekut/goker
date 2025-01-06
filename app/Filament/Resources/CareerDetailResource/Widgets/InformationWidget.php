<?php

namespace App\Filament\Resources\CareerDetailResource\Widgets;

use Filament\Widgets\TableWidget as BaseWidget;
use Filament\Tables;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Table;

class InformationWidget extends BaseWidget
{
    public ?Model $record = null;

    /**
     * Mount the widget with the record.
     */
    public function mount(Model $record): void
    {
        $this->record = $record;
    }

    public function table(Table $table): Table {
        return $table
            ->deferLoading()
            
            ->header(view('filament.information-widget'))
            ->paginated(false)
            
            ->query($this->record->newQuery()->where('user_career_id', $this->record->user_career_id))
            ->columns([
                Tables\Columns\TextColumn::make('profile.telephone')
                    ->label('Nomor Telepon'),
    
                Tables\Columns\TextColumn::make('user.email')
                    ->label('Email'),
    
                Tables\Columns\TextColumn::make('profile.gender')
                    ->label('Jenis Kelamin'),
    
                Tables\Columns\TextColumn::make('profile.dob')
                    ->label('Tanggal Lahir'),
    
                Tables\Columns\TextColumn::make('profile.domicile')
                    ->label('Domisili'),
    
                    Tables\Columns\TextColumn::make('user.profile.education_level')
                    ->label('Pendidikan')
                    ->formatStateUsing(fn ($state, $record) => 
                        ($record->user?->profile?->education_level ?? '-') . 
                        ' ' . 
                        ($record->user?->profile?->major ?? '-')
                    )
                
            ]);
    }
}
