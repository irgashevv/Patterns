<?php

namespace App\Behaviors\Quack;

use App\Interfaces\QuackBehavior;

class MuteQuack implements QuackBehavior
{

	/**
	 * @return string
	 */
	public function quack() : string
	{
		return 'No sound, can not quack';
	}
}