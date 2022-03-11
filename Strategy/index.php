<?php

use App\Behaviors\Fly\FlyWithRocket;
use App\Behaviors\UseWeapon\AxeBehavior;
use App\Characters\Queen;
use App\Ducks\MallardDuck;
use App\Ducks\ModelDuck;

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