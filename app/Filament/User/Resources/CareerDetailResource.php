<?php

namespace App\Filament\User\Resources;

use App\Filament\User\Resources\CareerDetailResource\Pages;
use App\Filament\User\Resources\CareerDetailResource\RelationManagers;
use App\Models\CareerDetail;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class CareerDetailResource extends Resource
{
    protected static ?string $model = CareerDetail::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function shouldRegisterNavigation(): bool
{
    return false; 
}

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
                Forms\Components\TextInput::make('psychological_test_score')
                    ->numeric()
                    ->default(null),
                Forms\Components\TextInput::make('interview_score')
                    ->numeric()
                    ->default(null),
                Forms\Components\TextInput::make('mcu_score')
                    ->numeric()
                    ->default(null),
                Forms\Components\Textarea::make('review')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('career_status')
                    ->required(),
                Forms\Components\DateTimePicker::make('date_uploaded'),
                Forms\Components\DateTimePicker::make('date_updated'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->deferLoading()
            ->striped() 
            ->query(CareerDetail::query()->where('user_id', '=', Auth::user()->id))
            ->emptyStateHeading('Belum ada user')
            ->emptyStateDescription('Yuk mulai manage user!')
            ->columns([
                Tables\Columns\TextColumn::make('career.name')
                    ->numeric()
                    ->sortable()
                    ->label('Nama karir'),
                Tables\Columns\TextColumn::make('date_uploaded')
                    ->dateTime()
                    ->sortable()
                    ->label('Tanggal lamaran')
                    ,
                Tables\Columns\TextColumn::make('cv')
                    ->searchable()
                    ->label('CV kamu'),
                Tables\Columns\TextColumn::make('career_status')
                    ->searchable()
                    ->label('Status lamaran')
                    ->colors([
                            'status-applied' => 'Applied',
                            'status-psychological-test' => 'Psychological Test',
                            'status-interview' => 'Interview',
                            'status-mcu' => 'MCU',
                            'status-accepted' => 'Accepted',
                        ])
                    ->icon(fn ($record) => match ($record->career_status) {
                        'Applied' => 'heroicon-m-document-check',
                        'Psychological Test' => 'heroicon-m-clipboard-document',
                        'Interview' => 'heroicon-m-user-group',
                        'MCU' => 'heroicon-m-heart',
                        'Accepted' => 'heroicon-m-check-badge',
                        default => 'heroicon-m-question-mark-circle', // Fallback icon for unknown statuses
                    }),
                
            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
               
            ]);
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
            // 'edit' => Pages\EditCareerDetail::route('/{record}/edit'),
        ];
    }
}
