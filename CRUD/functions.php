<?php

function dd($data)
{
    echo "<pre>";
    die(var_dump($data));
    echo "<pre>";
}

function myErrors()
{
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}