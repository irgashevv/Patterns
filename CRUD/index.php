<?php


require_once __DIR__ . '/../vendor/autoload.php';
require_once 'functions.php';
require_once 'Task.php';
$pdo = ConnectToDb();

$tasks = FetchAllTasks($pdo);

require_once 'index.view.php';