<?php

namespace App\Behaviors\UseWeapon;

use App\Interfaces\WeaponBehavior;

class KnifeBehavior implements WeaponBehavior
{

	/**
	 * @return string
	 */
	public function useWeapon() : string
	{
		return 'Attack with a Knife';
	}
}