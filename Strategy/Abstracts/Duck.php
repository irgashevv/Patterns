<?php

namespace Str\Abstracts;

use Str\Interfaces\FlyBehavior;
use Str\Interfaces\QuackBehavior;

abstract class Duck
{
	public FlyBehavior $flyBehavior;
	public QuackBehavior $quackBehavior;

	abstract public function display();

	public function swim()
	{
	}

	public function performFly()
	{
		return $this->flyBehavior->fly();
	}

	public function performQuack()
	{
		return $this->quackBehavior->quack();
	}
}