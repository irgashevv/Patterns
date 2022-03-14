<?php

use Observers\CurrentConditionsDisplay;
use Subjects\WeatherData;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../vendor/autoload.php';

$weatherData = new WeatherData();

$currentConditionsDisplay = new CurrentConditionsDisplay($weatherData);

$weatherData->setMeasurements(12.1,13.1,12.0);

