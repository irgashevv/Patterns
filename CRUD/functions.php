<?php

function dd($data)
{
    echo "<pre>";
    var_dump($data);
    echo "<pre>";
    die();
}

function myErrors()
{
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}