<?php

namespace Hasanablak\OdemeSistemi\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider;

class OdemeSistemiEventServiceProvider extends EventServiceProvider
{
	protected $listen  = [
		'Illuminate\Auth\Events\Login' => [
			'Hasanablak\OdemeSistemi\Listeners\LoginListener'
		]
	];
	/*
	public function register()
	{
		dd("test");
	}
	*/
}
