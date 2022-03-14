<?php

namespace Obs\Interfaces;

interface Observer
{
    public function update(float $temperature, float $humidity, float $pressure);
}