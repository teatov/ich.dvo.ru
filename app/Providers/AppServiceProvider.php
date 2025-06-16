<?php

namespace App\Providers;

use App\Interfaces\CardSerializable;
use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;

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
        Collection::macro('cardSerialize', function () {
            return $this->map(function (CardSerializable $cardSerializable) {
                return $cardSerializable->cardSerialize();
            });
        });
    }
}
