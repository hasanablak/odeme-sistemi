<?php

namespace Hasanablak\OdemeSistemi\Listeners;

use Hasanablak\OdemeSistemi\Models\UserLog;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class LoginListener
{
	/**
	 * Create the event listener.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//
	}

	/**
	 * Handle the event.
	 *
	 * @param  object  $event
	 * @return void
	 */
	public function handle($event)
	{
		UserLog::unguard();
		UserLog::create([
			'user_id'	=> $event->user->id,
			'id' => '::1',
			'user_agent'	=> 'test'
		]);
	}
}
