<?php

namespace Str\Behaviors\UseWeapon;

use Str\Interfaces\WeaponBehavior;

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