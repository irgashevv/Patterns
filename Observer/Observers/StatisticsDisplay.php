<?php

namespace Obs\Observers;

use Obs\Interfaces\DisplayElement;
use Obs\Interfaces\Observer;
use Obs\Interfaces\Subject;

class StatisticsDisplay implements Observer, DisplayElement
{
    protected float $temperature;
    protected float $pressure;
    private Subject $weatherData;

    public function __construct(Subject $subject)
    {
        $this->weatherData = $subject;
        $this->weatherData->removeObserver($this);
    }

    public function display(): string
    {
        return "The Pressure is: $this->pressure and the Temperature is $this->temperature now. <br>";
    }

    public function update()
    {
        $this->pressure = $this->weatherData->getPressure();
        $this->temperature = $this->weatherData->getTemperature();
    }
}