<?php

namespace Str\Characters;

use Str\Abstracts\Character;
use Str\Behaviors\UseWeapon\AxeBehavior;

class Troll extends Character
{

	public function __construct()
	{
		$this->weaponBehavior = new AxeBehavior();
	}
}