<?php

namespace App\Characters;

use App\Abstracts\Character;
use App\Behaviors\UseWeapon\BowAndArrowBehavior;

class Knight extends Character
{

	public function __construct()
	{
		$this->weaponBehavior = new BowAndArrowBehavior();
	}
}