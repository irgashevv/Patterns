<?php

namespace App\Behaviors\UseWeapon;

use App\Interfaces\WeaponBehavior;

class SwordBehavior implements WeaponBehavior
{

	/**
	 * @return string
	 */
	public function useWeapon() : string
	{
		return 'Attack with a Sword';
	}
}