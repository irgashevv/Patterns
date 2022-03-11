<?php

namespace App\Ducks;

use App\Abstracts\Duck;
use App\Behaviors\Fly\FlyNoWay;
use App\Behaviors\Quack\MuteQuack;
use App\Interfaces\FlyBehavior;

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