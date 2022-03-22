<?php

use Obs\Observers\CurrentConditionsDisplay;
use Obs\Observers\ForecastDisplay;
use Obs\Observers\StatisticsDisplay;
use Obs\Subjects\WeatherData;

require_once __DIR__ . '/../vendor/autoload.php';

$weatherData = new WeatherData();

$currentConditionsDisplay = new CurrentConditionsDisplay($weatherData);
$forecastDisplay = new ForecastDisplay($weatherData);
$statisticDisplay = new StatisticsDisplay($weatherData);

$weatherData->setMeasurements(12.1,13.1,12.0);
$weatherData->setMeasurements(11.1,11.1,11.0);

echo $currentConditionsDisplay->display();
echo $forecastDisplay->display();
echo $statisticDisplay->display();