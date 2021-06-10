<?php

namespace App\Providers;

use App\Services\EmailService;
use App\Services\EmailTemplateService;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(EmailTemplateService::class, function($app) {
            return new EmailTemplateService();
        });
        $this->app->bind(EmailService::class, function($app) {
            return new EmailService(Config::get("mail.from.address"), Config::get("mail.from.name"));
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
