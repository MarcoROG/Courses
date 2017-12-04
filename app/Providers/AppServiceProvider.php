<?php

namespace App\Providers;


use Barryvdh\Debugbar\Facade;
use Barryvdh\Debugbar\ServiceProvider as DebugBarServiceProvider;
use Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider;
use Carbon\Carbon;
use Faker\Factory as FakerFactory;
use Faker\Generator as FakerGenerator;
use Illuminate\Support\ServiceProvider;
use Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
    
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->setLocales();
        $this->registerDevProviders();
    }
    
    private function setLocales()
    {
        setlocale(LC_ALL, config("app.locale_extended"));
        Carbon::setLocale(config("app.locale"));
    }
    
    private function registerDevProviders()
    {
        if ($this->app->environment("local", "testing", "staging", "development", "dev")) {
            $this->app->register(DebugBarServiceProvider::class);
            $this->app->register(IdeHelperServiceProvider::class);
            $this->app->alias("Debugbar", Facade::class);
            
            $this->app->singleton(FakerGenerator::class, function () {
                return FakerFactory::create(config("app.locale_extended"));
            });
        }
    }
    
}
