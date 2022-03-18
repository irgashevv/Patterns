<?php
require_once __DIR__ . '/../vendor/autoload.php';

class Task
{
    public string $description;
    public bool $completed = false;

    public function __construct($description)
    {
        $this->description = $description;
    }

    public function complete()
    {
        $this->completed = true;
    }

    public function isComplete(): bool
    {
        return $this->completed;
    }
}

$tasks = [
    new Task('Go to the store'),
    new Task('Clean house'),
    new Task('Work hard'),
];

$tasks['2']->complete();

require_once 'index.view.php';