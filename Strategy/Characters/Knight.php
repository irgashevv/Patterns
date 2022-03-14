<?php

namespace Str\Characters;

use Str\Abstracts\Character;
use Str\Behaviors\UseWeapon\BowAndArrowBehavior;

class Knight extends Character
{

	public function __construct()
	{
		$this->weaponBehavior = new BowAndArrowBehavior();
	}
}