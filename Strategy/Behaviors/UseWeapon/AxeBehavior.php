<?php

namespace App\Behaviors\UseWeapon;

use App\Interfaces\WeaponBehavior;

class AxeBehavior implements WeaponBehavior
{

	/**
	 * @return string
	 */
	public function useWeapon() : string
	{
		return 'Attack with an Axe';
	}
}