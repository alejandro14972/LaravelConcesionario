<?php

namespace App\Providers;

use App\Models\Empresa;
use Illuminate\Support\ServiceProvider;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\View;

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
        View::composer('*', function ($view) {
            $empresa = Empresa::where('user_id', auth()->id())->first();
            $view->with('empresaNavegacion', $empresa);
        });


        VerifyEmail::toMailUsing(
            function ($notifible, $url)  {
                return (new MailMessage)
                    ->subject('Verificar cuenta')
                    ->line('Tu cuenta ya esta casi lista, solo necesitas verificar tu correo.')
                    ->action('Confirmar cuenta', $url)
                    ->line('Si no creaste una cuenta, no es necesario realizar ninguna acción.');
            }
        );
    }
}
