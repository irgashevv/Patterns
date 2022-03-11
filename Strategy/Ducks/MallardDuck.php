<?php

namespace App\Ducks;

use App\Abstracts\Duck;
use App\Behaviors\Fly\FlyWithWings;
use App\Behaviors\Quack\Quack;

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