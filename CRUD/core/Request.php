<?php

class Request
{
    public static function uri(): string
    {
        return trim($_SERVER['REQUEST_URI'], '/');
    }
}