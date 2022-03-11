<?php

namespace App\Behaviors\Quack;

use App\Interfaces\QuackBehavior;

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