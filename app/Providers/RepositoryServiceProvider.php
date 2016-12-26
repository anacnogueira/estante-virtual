<?php


namespace Estante\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
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
        $this->app->bind(\Estante\Repositories\AuthorRepository::class, \Estante\Repositories\AuthorRepositoryEloquent::class);
        $this->app->bind(\Estante\Repositories\CategoryRepository::class, \Estante\Repositories\CategoryRepositoryEloquent::class);

    }
}