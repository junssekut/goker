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

class UserPanelProvider extends PanelProvider
{
    public function boot(){
        FilamentView::registerRenderHook(
            PanelsRenderHook::AUTH_LOGIN_FORM_AFTER,
            fn () => Filament::getCurrentPanel()->getId() === 'user'
                ? view('filament.login-inject-user')
                : null
        );

        FilamentView::registerRenderHook(
            PanelsRenderHook::SIDEBAR_NAV_START, // or use SIDEBAR_NAV_END
            fn () => Filament::getCurrentPanel()->getId() === 'user'
                ? view('filament.sidebar-avatar') 
                : null
        );

        FilamentView::registerRenderHook(
            PanelsRenderHook::SIDEBAR_NAV_END, // or use SIDEBAR_NAV_END
            fn () => Filament::getCurrentPanel()->getId() === 'user'
                ? view('filament.sidebar-logout')
                : null
        );


        FilamentView::registerRenderHook(
            PanelsRenderHook::TOPBAR_AFTER, // or use SIDEBAR_NAV_END
            fn () => Filament::getCurrentPanel()->getId() === 'user'
                ? view('filament.topbar-inject') 
                : null
        );

        FilamentView::registerRenderHook(
            PanelsRenderHook::TOPBAR_AFTER, // or use SIDEBAR_NAV_END
            fn () => Filament::getCurrentPanel()->getId() === 'user'
                ? view('filament.userProfileWidget') 
                : null
        );
    }

    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('user')
            ->path('user')
            ->authGuard('user')
            ->login()
            // ->getLoginUrl('filament.auth.login')
            // ->getLoginView('filament.auth.login')

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
                NavigationItem::make('Home Page')
                    ->icon('heroicon-o-arrow-left')
                    ->url('/')
            ])
            
            ->favicon(asset('assets/images/goker-icon.png'))

            ->discoverResources(in: app_path('Filament/User/Resources'), for: 'App\\Filament\\User\\Resources')
            ->discoverPages(in: app_path('Filament/User/Pages'), for: 'App\\Filament\\User\\Pages')
            ->pages([
                
            ])
            ->discoverWidgets(in: app_path('Filament/User/Widgets'), for: 'App\\Filament\\User\\Widgets')
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
