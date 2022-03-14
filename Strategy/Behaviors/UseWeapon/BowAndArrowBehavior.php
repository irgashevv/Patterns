<?php

namespace Str\Behaviors\UseWeapon;

use Str\Interfaces\WeaponBehavior;

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