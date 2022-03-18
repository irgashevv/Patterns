<?php

$query = require_once 'bootstrap.php';

$tasks = $query->selectAll('todos');

require_once 'index.view.php';