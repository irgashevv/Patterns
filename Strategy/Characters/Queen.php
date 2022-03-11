<?php

namespace App\Characters;

use App\Abstracts\Character;
use App\Behaviors\UseWeapon\KnifeBehavior;

class Queen extends Character
{

	public function __construct()
	{
		$this->weaponBehavior = new KnifeBehavior();
	}
}