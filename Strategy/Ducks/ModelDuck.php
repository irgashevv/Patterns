<?php

namespace Str\Ducks;

use Str\Abstracts\Duck;
use Str\Behaviors\Fly\FlyNoWay;
use Str\Behaviors\Quack\MuteQuack;
use Str\Interfaces\FlyBehavior;

class ModelDuck extends Duck
{

	public function __construct()
	{
		$this->flyBehavior = new FlyNoWay();
		$this->quackBehavior = new MuteQuack();
	}

	/**
	 * @param FlyBehavior $flyBehavior
	 * @return void
	 */
	public function setFlyBehavior(FlyBehavior $flyBehavior)
	{
		$this->flyBehavior = $flyBehavior;
	}

	public function display() : string
	{
		return 'Here will be picture of Model duck';
	}
}