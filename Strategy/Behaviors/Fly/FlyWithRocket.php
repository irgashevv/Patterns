<?php

namespace Str\Behaviors\Fly;

use Str\Interfaces\FlyBehavior;

class FlyWithRocket implements FlyBehavior
{

	/**
	 * @return string
	 */
	public function fly() : string
	{
		return 'I said that I can not fly, but I can, but with Rocket, but without you';
	}
}