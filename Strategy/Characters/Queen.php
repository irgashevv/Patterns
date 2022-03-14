<?php

namespace Str\Characters;

use Str\Abstracts\Character;
use Str\Behaviors\UseWeapon\KnifeBehavior;

class Queen extends Character
{

	public function __construct()
	{
		$this->weaponBehavior = new KnifeBehavior();
	}
}