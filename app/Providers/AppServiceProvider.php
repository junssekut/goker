<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Filament\Facades\Filament;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Filament::serving(function () {
            Filament::registerRenderHook('auth.after', function () {
                $panel = Filament::getCurrentPanel()?->getId();
                dd($panel);
                if ($panel === 'admin') {
                    return redirect('/admin-dashboard');
                } elseif ($panel === 'hrd') {
                    return redirect('/hrd-dashboard');
                } elseif ($panel === 'user') {
                    return redirect('/'); // Redirect ke home jika user biasa
                }

                return redirect('/'); // Default redirect
            });
        });
    }
}
