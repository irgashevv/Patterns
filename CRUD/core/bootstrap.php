<?php

$config = require_once 'config.php';
require_once 'Router.php';
require_once 'Request.php';
require_once 'database/Connection.php';
require_once 'database/QueryBuilder.php';

return new QueryBuilder(
    Connection::make($config['database'])
);