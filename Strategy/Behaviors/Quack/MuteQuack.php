<?php

namespace Str\Behaviors\Quack;

use Str\Interfaces\QuackBehavior;

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