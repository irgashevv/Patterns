<?php

namespace App\Behaviors\UseWeapon;

use App\Interfaces\WeaponBehavior;

class BowAndArrowBehavior implements WeaponBehavior
{

	/**
	 * @return string
	 */
	public function useWeapon() : string
	{
		return 'Attack with a Bow and Arrow';
	}
}