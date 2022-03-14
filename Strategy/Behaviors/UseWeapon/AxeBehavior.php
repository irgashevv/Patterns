<?php

namespace Str\Behaviors\UseWeapon;

use Str\Interfaces\WeaponBehavior;

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