<?php

$router->get('CRUD', 'controllers/index.php');
$router->get('CRUD/about', 'controllers/about.php');
$router->get('CRUD/contact', 'controllers/contact.php');
$router->post('CRUD/names', 'controllers/add-name.php');