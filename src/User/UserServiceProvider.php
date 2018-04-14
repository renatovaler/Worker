<?php
namespace Worker\Auth;

use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'worker');
        $this->loadRoutesFrom(__DIR__.'/routes.php');
		
		$this->publishes([
			__DIR__.'/Views' => base_path('resources/views/worker/auth'),
			__DIR__.'/Migrations' => database_path('migrations/')
		]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/Config/auth.php', 'auth');
    }
}
