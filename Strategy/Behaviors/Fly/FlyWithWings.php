<?php

namespace Str\Behaviors\Fly;

use Str\Interfaces\FlyBehavior;

class FlyWithWings implements FlyBehavior
{

	/**
	 * @return string
	 */
	public function fly() : string
	{
		return 'I am flying with wings';
	}
}