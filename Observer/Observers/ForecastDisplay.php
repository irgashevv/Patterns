<?php

namespace Obs\Observers;

use Obs\Interfaces\DisplayElement;
use Obs\Interfaces\Observer;
use Obs\Interfaces\Subject;

class ForecastDisplay implements Observer, DisplayElement
{
    protected float $humidity;
    protected float $pressure;
    private Subject $weatherData;

    public function __construct(Subject $weatherData)
    {
        $this->weatherData = $weatherData;
        $weatherData->registerObserver($this);
    }

    public function display(): string
    {
        return "I will show Humidity: $this->humidity and Pressure: $this->pressure <br>";
    }

    public function update()
    {
        $this->humidity = $this->weatherData->getHumidity();
        $this->pressure = $this->weatherData->getPressure();
    }
}