<?php

namespace App\Providers;

use App\Repositories\Contracts\GameRepositoryContract;
use App\Repositories\GameRepository;
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
        $this->app->bind(GameRepositoryContract::class, GameRepository::class);
    }
}
