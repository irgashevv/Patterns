<?php

namespace App\Behaviors\Fly;

use App\Interfaces\FlyBehavior;

class FlyNoWay implements FlyBehavior
{

	/**
	 * @return string
	 */
	public function fly() : string
	{
		return 'I can not Fly';
	}
}