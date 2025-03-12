<?php

namespace App\Filament\Resources\CareerResource\Pages;

use App\Filament\Resources\CareerResource;
use Filament\Forms\Contracts\HasForms;
use Filament\Resources\Pages\Page;
use App\Models\Career;
use Filament\Notifications\Notification;
use Illuminate\Validation\ValidationException;
use Filament\Support\Facades\FilamentAsset;
use Filament\Support\Assets\Css;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;

use Filament\Forms;
use Filament\Forms\Form;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use App\Models\CareerCategory;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\HtmlString;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\ToggleButtons;
use Filament\Forms\Components\Section;

class CareerCardPage extends Page implements HasForms
{
    use Forms\Concerns\InteractsWithForms;

    protected static string $resource = CareerResource::class;
    protected static string $view = 'filament.resources.career-resource.pages.career-card-page';
    protected ?string $heading = '';
    protected static bool $isLazy = true;

    public $records;
    public $isCreateModalOpen = false;

    public array $data = [
        'name' => '',
        'category' => '',
        'location' => '',
        'briefDescription' => '',
        'deadline' => '',
        'method' => '',
        'status' => '',

        'description' => '',
        'jobdesk' => '',
        'requirement' => '',
        'aboutTeam' => '',
    ];

    // public array $rules = [
    //     'name' => 'required|string|max:255',
    //     'location' => 'required|string|min:3',
    //     'category' => 'required|string',
    //     'description' => 'nullable|string',
    //     'deadline' => 'required|date',
    //     'method' => 'required|string',
    //     'status' => 'required|string',
    // ];


    /**
     * Mount the page and load records.
     */
    public function mount(): void
    {
        $this->loadRecords();

    }
   
    /**
     * Load career records.
     */
    public function loadRecords(): void
    {
        $this->records = Career::all();
    }

    /**
     * Close the create modal.
     */
    public function closeCreateModal(): void
    {
        $this->isCreateModalOpen = false;
    }

    protected function getViewData(): array
    {
        return [
            'records' => $this->records,
            'isCreateModalOpen' => $this->isCreateModalOpen,
        ];
    }

    public function updatedOnly($propertyName) {
        $this->validateOnly($propertyName);
    }

    // public function save() {
        // dd('hello');
    // }

    /**
     * Save a new career record.
     */
    public function save(): void
{
    try {
        $category = CareerCategory::where('id', $this->data['category'])->first();
        // $validated = $this->validate();

        $career = Career::create([
            'name' => $this->data['name'],
            'category_id' => $category->id,
            'location' => $this->data['location'],
            'category' => $this->data['category'],
            'briefDescription' => $this->data['briefDescription'],
            'method' => $this->data['method'],
            'status' => $this->data['status'],
        ]);

        $career->detail()->create([
            'Description' => $this->data['description'],
            'Jobdesk' => $this->data['jobdesk'],
            'Requirement' => $this->data['requirement'],
            'AboutTeam' => $this->data['aboutTeam'],
            'DateEnd' => $this->data['deadline'],
            'DateUploaded' => now() 
        ]);

        $this->loadRecords();
        $this->dispatch('close-modal', 'create');

        // Success Notification
        Notification::make()
            ->title('Lowongan baru berhasil ditambahkan!')
            ->body($this->data['name'] . ' udah di-publish nih, Yuk iklanin!')
            ->icon('heroicon-o-briefcase')
            ->success()
            ->send();
    } catch (ValidationException $e) {
        foreach ($e->errors() as $field => $messages) {
            foreach ($messages as $message) {
                $this->addError($field, $message); // Populate the $errors object
            }
        }

        Notification::make()
            ->title('Gagal menambahkan lowongan')
            ->body('Ada ' . collect($e->errors())->flatten()->count() . ' validasi gagal yang terjadi, Yuk benerin dulu!')
            ->danger()
            ->send();
    }
}


    public function form(Form $form): Form
    {
        return $form
            ->model(Career::class)
            ->statePath('data')
            ->schema([
                Wizard::make([
                    Wizard\Step::make('Lowongan')
                        ->description('Informasi lowongan')
                        ->columns(2)
                        ->schema([
                            TextInput::make('name')
                                ->lazy()    
                                ->label('Nama Pekerjaan')
                                ->maxLength(24)
                                ->suffixIcon('heroicon-m-briefcase')
                                ->suffixIconColor(fn (): string => $this->getErrorBag()->first('data.name') ? 'danger' : 'goker-gelap')
                                ->placeholder('Pekerjaan nya namanya?')
                                ->columnSpan(['default' => 2, 'sm' => 1])
                                ->required()
                                ->autocapitalize('words'),
                            Select::make('category')
                                ->label('Kategori')
                                ->lazy()
                                ->required()
                                ->relationship('category', 'category_name')
                                ->searchable()
                                ->preload()
                                ->loadingMessage('Lagi nyari kategori...')
                                ->noSearchResultsMessage('Yah, Ga ada kategorinya. Buat baru?')
                                ->searchPrompt('Cari kategori yang udah ada...')
                                ->placeholder('Kategori pekerjaan nya apa ya?')
                                ->columnSpan(['default' => 2, 'sm' => 1])
                                ->createOptionForm([
                                    TextInput::make('category_name') // Creating new category
                                        ->label('Nama Kategori')
                                        ->lazy()
                                        ->suffixIcon('heroicon-m-bookmark')
                                        // ->suffixIconColor(fn (): string => $this->getErrorBag()->first('category_name') ? 'danger' : 'goker-gelap')
                                        ->required(),
                                ]),
                            TextInput::make('location')
                                ->lazy()    
                                ->label('Lokasi')
                                ->suffixIcon('heroicon-m-map-pin')
                                ->suffixIconColor(fn (): string => $this->getErrorBag()->first('data.location') ? 'danger' : 'goker-gelap')
                                ->placeholder('Lokasi pekerjaan ini')
                                ->columnSpan(['default' => 2, 'sm' => 1])
                                ->required()
                                ->autocapitalize('words'),
                            DatePicker::make('deadline')
                                ->lazy()    
                                ->label('Tenggat Lowongan')
                                ->suffixIcon('heroicon-m-calendar-date-range')
                                ->suffixIconColor(fn (): string => $this->getErrorBag()->first('data.deadline') ? 'danger' : 'goker-gelap')
                                ->columnSpan(['default' => 2, 'sm' => 1])
                                ->format('Y-m-d')
                                ->timezone('Asia/Jakarta')
                                ->required(),
                            Textarea::make('briefDescription')
                                ->lazy()    
                                ->label('Deskripsi Singkat')
                                ->placeholder('Kasih deskripsi singkat buat pekerjaan ini')
                                ->columnSpan(2)
                                ->required()
                                ->autosize(),
                            ToggleButtons::make('method')
                                ->lazy()
                                ->label('Metode Pekerjaan')
                                ->options([
                                    'Onsite' => 'Onsite',
                                    'Remote' => 'Remote',
                                ])
                                ->icons([
                                    'Onsite' => 'heroicon-o-arrows-pointing-in',
                                    'Remote' => 'heroicon-o-cloud-arrow-up',
                                ])
                                ->inline()
                                ->grouped()
                                ->required()
                                ->columnSpan(['default' => 2, 'sm' => 1]),
                            ToggleButtons::make('status')
                                ->lazy()
                                ->label('Waktu Pekerjaan')
                                ->options([
                                    'Full Time' => 'Full Time',
                                    'Part Time' => 'Part Time'
                                ])
                                ->icons([
                                    'Full Time' => 'heroicon-o-arrow-path',
                                    'Part Time' => 'heroicon-o-clock'
                                ])
                                ->inline()
                                ->grouped()
                                ->required()
                                ->columnSpan(['default' => 2, 'sm' => 1]),
                        ]),
                    Wizard\Step::make('Detail')
                    ->description('Informasi detail')
                    ->schema([
                        Section::make('Deskripsi')
                            ->description('Ceritakan lebih dalam tentang pekerjaan ini, jadi para calon pelamar tau pekerjaan ini tentang apa ya!')
                            ->schema([
                                RichEditor::make('description')
                                    ->lazy()
                                    ->label('Deskripsi Pekerjaan')
                                    ->hintIcon('heroicon-m-information-circle')
                                    ->hintIconTooltip('Informasi ini bakal ditampilin di halaman user! Hati-hati dengan kata-katanya ya! :)')
                                    ,
                            ])
                            ->collapsed(false),
                        Section::make('Jobdesk')
                            ->description('Pekerjaan ini ngapain aja sih? Mimin pengen tau :)')
                            ->schema([
                                RichEditor::make('jobdesk')
                                    ->lazy()
                                    ->label('Jobdesk Pekerjaan')
                                    ->hintIcon('heroicon-m-information-circle')
                                    ->hintIconTooltip('Informasi ini bakal ditampilin di halaman user! Hati-hati dengan kata-katanya ya! :)')
                                    ,
                            ])
                            ->collapsed(false),
                        Section::make('Requirement')
                            ->description('Calon pelamar butuh apa aja sih sebelum apply pekerjaan ini?')
                            ->schema([
                                RichEditor::make('requirement')
                                    ->lazy()
                                    ->label('Requirement Pekerjaan')
                                    ->hintIcon('heroicon-m-information-circle')
                                    ->hintIconTooltip('Informasi ini bakal ditampilin di halaman user! Hati-hati dengan kata-katanya ya! :)')
                                    ,
                            ])
                            ->collapsed(false),
                        Section::make('About Team')
                            ->description('Tim nya orang-orangnya gimana aja sih?, Yuk kasih tau!')
                            ->schema([
                                RichEditor::make('aboutTeam')
                                    ->lazy()
                                    ->label('Tentang Tim')
                                    ->hintIcon('heroicon-m-information-circle')
                                    ->hintIconTooltip('Informasi ini bakal ditampilin di halaman user! Hati-hati dengan kata-katanya ya! :)')
                                    ,
                            ])
                            ->collapsed(false),
                        
                    ]),    
                ])
                ->submitAction(new HtmlString(Blade::render(<<<BLADE
                    <x-filament::button
                        type="submit"
                        size="sm"
                        wire:click="save"
                    >
                        Submit
                    </x-filament::button>
                BLADE))),
            ])
            ->columns(1);
    }
}
