<?php

namespace App\Filament\Resources;

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

class CareerDetailResource extends Resource
{
    protected static ?string $model = CareerDetail::class;

    // protected static ?string $navigationLabel = 'Karirku';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static bool $shouldRegisterNavigation = false;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('user_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('career_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('cv')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('score')
                    ->required()
                    ->numeric(),
                Forms\Components\Textarea::make('review')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('career_status')
                    ->required()
                    ->maxLength(255)
                    ->default('Applied'),
                Forms\Components\DateTimePicker::make('date_uploaded'),
                Forms\Components\DateTimePicker::make('date_updated'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user_career_id')->label('ID')->sortable(),
                Tables\Columns\TextColumn::make('user.name')->label('Nama')->searchable(),
                Tables\Columns\TextColumn::make('career.name')->label('Jenis'),
                Tables\Columns\BadgeColumn::make('career_status')
                    ->label('Status')
                    ->colors([
                        'primary' => 'CV Diterima',
                        'success' => 'Diterima',
                        'warning' => 'Psikotes',
                        'danger' => 'Wawancara',
                        'secondary' => 'Kesehatan',
                    ]),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('career_status')
                    ->options([
                        'CV Diterima' => 'CV Diterima',
                        'Psikotes' => 'Psikotes',
                        'Wawancara' => 'Wawancara',
                        'Kesehatan' => 'Pemeriksaan Kesehatan',
                        'Diterima' => 'Diterima',
                    ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ]);
    }

    public static function getWidgets(): array
    {
        return [
            // CareerDetailResource\Widgets\CareerStatus::class,
        ];
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCareerDetails::route('/'),
            'create' => Pages\CreateCareerDetail::route('/create'),
            'view' => Pages\ViewCareerDetail::route('/{record}'),
            'edit' => Pages\EditCareerDetail::route('/{record}/edit'),
        ];
    }
}
