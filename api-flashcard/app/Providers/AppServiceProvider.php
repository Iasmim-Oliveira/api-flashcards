<?php

namespace App\Providers;

use App\Repositories\Challenge\ChallengeRepository;
use App\Repositories\Challenge\ChallengeRepositoryContract;
use App\Repositories\FlashCard\FlashCardRepository;
use App\Repositories\FlashCard\FlashCardRepositoryContract;
use App\Repositories\UserReponse\UserResponseRepository;
use App\Repositories\UserReponse\UserResponseRepositoryContract;
use App\Services\Challenge\ChallengeService;
use App\Services\Challenge\ChallengeServiceContract;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(FlashCardRepositoryContract::class, FlashCardRepository::class);
        $this->app->singleton(ChallengeRepositoryContract::class, ChallengeRepository::class);
        $this->app->singleton(UserResponseRepositoryContract::class, UserResponseRepository::class);
        $this->app->singleton(ChallengeServiceContract::class, ChallengeService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
