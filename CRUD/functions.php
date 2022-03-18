<?php

function connectToDb()
{
    try {
        return new PDO('mysql:host=localhost;dbname=academy', 'ibra', 'Password123$');
    } catch (PDOException $exception) {
        die($exception->getMessage());
    }
}

function fetchAllTasks($pdo)
{
    $statement = $pdo->prepare('SELECT * FROM todos');

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}

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