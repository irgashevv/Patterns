<?php

namespace Str\Behaviors\Quack;

use Str\Interfaces\QuackBehavior;

class Squeak implements QuackBehavior
{

	/**
	 * @return string
	 */
	public function quack() : string
	{
		return 'Squeak-squeak-squeak';
	}
}