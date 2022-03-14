<?php

namespace Observers;

use Obs\Interfaces\DisplayElement;
use Obs\Interfaces\Observer;
use Obs\Interfaces\Subject;

class CurrentConditionsDisplay implements Observer, DisplayElement
{
    protected float $temperature;
    protected float $humidity;
    protected Subject $weatherData;

    public function __construct(Subject $weatherData)
    {
        $this->weatherData = $weatherData;
        $weatherData->registerObserver($this);
    }

    public function update(float $temperature, float $humidity, float $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
    }

    public function display(): string
    {
        return "Current conditions are: Temperature: $this->temperature; Humidity: $this->humidity";
    }
}