<?php

namespace Hasanablak\OdemeSistemi\Providers;

use Illuminate\Support\ServiceProvider;

class OdemeSistemiServiceProvider extends ServiceProvider
{

	public function boot()
	{
		/*
		$this->loadRoutesFrom(__DIR__ . '/../routes/web.php');

		$this->loadViewsFrom(__DIR__ . '/../resources/views', 'test-package');


		$this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'test-package');
		*/
		$this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
	}

	public function register()
	{
		//$this->mergeConfigFrom(__DIR__ . '/../config/test-package.php', 'test-package');
		$this->app->register(OdemeSistemiEventServiceProvider::class);
	}
}
