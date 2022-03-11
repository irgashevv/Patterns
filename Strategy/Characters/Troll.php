<?php

namespace App\Characters;

use App\Abstracts\Character;
use App\Behaviors\UseWeapon\AxeBehavior;

class Troll extends Character
{

	public function __construct()
	{
		$this->weaponBehavior = new AxeBehavior();
	}
}