<?php

namespace App\Behaviors\Fly;

use App\Interfaces\FlyBehavior;

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