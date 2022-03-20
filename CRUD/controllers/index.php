<?php

$users = $queryBuilder->selectAll('users');

require 'views/index.view.php';