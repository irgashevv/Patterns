<?php

namespace Str\Abstracts;

use Str\Interfaces\WeaponBehavior;

abstract class Character
{
	public WeaponBehavior $weaponBehavior;

	public function fight()
	{
		return $this->weaponBehavior->useWeapon();
	}

	public function setWeapon(WeaponBehavior $weaponBehavior)
	{
		$this->weaponBehavior = $weaponBehavior;
	}
}