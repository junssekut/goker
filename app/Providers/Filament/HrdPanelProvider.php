<?php

namespace App\Providers\Filament;

use App\Filament\Resources\CareerDetailResource\Widgets\CareerStatus;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Filament\FontProviders\LocalFontProvider;

use Filament\Navigation\NavigationItem;
use App\Filament\Resources\CareerResource\Pages\CareerCardPage;
use App\Filament\Pages\Dashboard;
use App\Models\CareerDetail;
use Filament\Facades\Filament;
use Filament\Support\Facades\FilamentView;
use Filament\View\PanelsRenderHook;

use Filament\Support\Facades\FilamentColor;
 

class HrdPanelProvider extends PanelProvider
{
    public function boot() {
        FilamentColor::register([
            'goker-sangat-gelap' => Color::hex('#00660B'),
            'goker-gelap' => Color::hex('#00AA13'),
            'goker-terang' => Color::hex('#E2F2D0'),

            'status-applied' => Color::hex('#00AA13'),
            'status-psychological-test' => Color::hex('#00AFDE'), 
            'status-interview' => Color::hex('#C62029'), 
            'status-mcu' => Color::hex('#94028B'), 
            'status-accepted' => Color::hex('#FF009C'), 
            // 'danger' => Color::hex('#ff0000'),
        ]);

        FilamentView::registerRenderHook(
            PanelsRenderHook::SIDEBAR_NAV_START, // or use SIDEBAR_NAV_END
            fn () => view('filament.sidebar-avatar') // This loads your custom Blade view
        );

        FilamentView::registerRenderHook(
            PanelsRenderHook::SIDEBAR_NAV_END, // or use SIDEBAR_NAV_END
            fn () => view('filament.sidebar-logout') // This loads your custom Blade view
        );

        FilamentView::registerRenderHook(
            PanelsRenderHook::AUTH_LOGIN_FORM_AFTER, // or use SIDEBAR_NAV_END
            fn () => view('filament.login-inject') // This loads your custom Blade view
        );

        FilamentView::registerRenderHook(
            PanelsRenderHook::TOPBAR_AFTER, // or use SIDEBAR_NAV_END
            fn () => view('filament.topbar-inject') // This loads your custom Blade view
        );
    }

    public function panel(Panel $panel): Panel
    {
        

        return $panel
            ->default()
            ->id('hrd')
            ->path('hrd')
            ->login()

            // theme customization
            ->colors([
                'danger' => Color::Rose,
                'gray' => Color::Gray,
                'info' => Color::Blue,
                'success' => Color::Emerald,
                'warning' => Color::Orange,

                'primary' => '#00AA13',
            ])
            ->font(
                'Mnbook',
                url: url('font/Maison_Neue_Book.ttf'), // Correct the path here
                provider: LocalFontProvider::class,
            )
                
            ->darkMode(false)
            ->brandName('goker')
            ->brandLogo(asset('assets/images/goker-cerah.png'))
            ->brandLogoHeight('2rem')
            ->viteTheme('resources/css/filament/hrd/theme.css')
            ->breadcrumbs(false)

            ->navigationItems([
                NavigationItem::make('Beranda')
                    ->icon('heroicon-o-home')
                    ->url(fn () => Dashboard::getUrl())
                    ->isActiveWhen(fn () => 
                        request()->routeIs('filament.hrd.pages.dashboard')
                    )
                    ->badge(fn () => CareerDetail::count())
                    ->badgeTooltip(fn() => 'Ada ' . CareerDetail::count() . ' pelamar nih yang nungguin kamu!')
                    ->sort(1),
                NavigationItem::make('Lowongan')
                    ->url(fn () => CareerCardPage::getUrl())
                    ->icon('heroicon-o-briefcase')
                    ->sort(2)
                    ->isActiveWhen(fn () => request()->routeIs('filament.hrd.resources.careers.card') ||
                    request()->routeIs('filament.hrd.resources.careers.view') || 
                    request()->routeIs('filament.hrd.resources.career-details.view')),
            ])
            
            ->favicon(asset('assets/images/goker-icon.png'))

            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                CareerStatus::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
