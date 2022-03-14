<?php

namespace Str\Characters;

use Str\Abstracts\Character;
use Str\Behaviors\UseWeapon\SwordBehavior;

class King extends Character
{

	public function __construct()
	{
		$this->weaponBehavior = new SwordBehavior();
	}
}