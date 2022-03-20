<?php

$queryBuilder->insert('users', [
    'name' => $_POST['name'],

]);

header('Location: /CRUD');