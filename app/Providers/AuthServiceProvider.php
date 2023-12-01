<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Notifications\Messages\MailMessage;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
        // ResetPassword::toMailUsing(function ($notifiable, $token) {
        //     $url = route('password.reset',$token).'?email='.$notifiable->getEmailForPasswordReset();
        //     return (new MailMessage())
        //         ->subject('Password reset')
        //         ->view('emails.reset', compact('url'));
        // });
    }
}
