<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    protected static $repositories = [
        'semester' => [
            \App\Repositories\Contracts\SemesterRepositoryInterface::class,
            \App\Repositories\SemesterRepositoryEloquent::class
        ],
        'news' => [
            \App\Repositories\Contracts\NewsRepositoryInterface::class,
            \App\Repositories\NewsRepositoryEloquent::class
        ]
    ];
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        foreach (static::$repositories as $repository) {
            $this->app->singleton(
                $repository[0],
                $repository[1]
            );
        }
    }
}
