<?php

namespace App\Behaviors\Quack;

use App\Interfaces\QuackBehavior;

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