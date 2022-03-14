<?php

use Str\Characters\Queen;
use Str\Behaviors\Fly\FlyWithRocket;
use Str\Behaviors\UseWeapon\AxeBehavior;
use Str\Ducks\MallardDuck;
use Str\Ducks\ModelDuck;

require_once __DIR__ . '/../vendor/autoload.php';

//$mallardDuck = new MallardDuck();
//
//echo $mallardDuck->performQuack();
//echo $mallardDuck->performFly();

//$model = new ModelDuck();
//echo $model->performFly();
//$model->setFlyBehavior(new FlyWithRocket());
//echo $model->performFly();

$elizavetta = new Queen();
echo $elizavetta->fight();
$elizavetta->setWeapon(new AxeBehavior());
echo $elizavetta->fight();