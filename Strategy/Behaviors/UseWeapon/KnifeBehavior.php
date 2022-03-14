<?php

namespace Str\Behaviors\UseWeapon;

use Str\Interfaces\WeaponBehavior;

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