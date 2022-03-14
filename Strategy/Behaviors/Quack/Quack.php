<?php

namespace Str\Behaviors\Quack;

use Str\Interfaces\QuackBehavior;

class Quack implements QuackBehavior
{

	/**
	 * @return string
	 */
	public function quack() : string
	{
		return 'Quack-quack-quack';
	}
}