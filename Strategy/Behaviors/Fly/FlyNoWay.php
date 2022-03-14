<?php

namespace Str\Behaviors\Fly;

use Str\Interfaces\FlyBehavior;

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