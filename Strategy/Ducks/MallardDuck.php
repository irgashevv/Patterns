<?php

namespace Str\Ducks;

use Str\Abstracts\Duck;
use Str\Behaviors\Fly\FlyWithWings;
use Str\Behaviors\Quack\Quack;

class MallardDuck extends Duck
{

	public function __construct()
	{
		$this->flyBehavior = new FlyWithWings();
		$this->quackBehavior = new Quack();
	}

	/**
	 * @return string
	 */
	public function display() : string
	{
		return 'Here will be picture of Mallard Duck';
	}
}