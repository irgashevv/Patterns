<?php

namespace App\Characters;

use App\Abstracts\Character;
use App\Behaviors\UseWeapon\SwordBehavior;

class King extends Character
{

	public function __construct()
	{
		$this->weaponBehavior = new SwordBehavior();
	}
}