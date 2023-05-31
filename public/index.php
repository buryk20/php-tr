<?php
require_once dirname(__DIR__) . '/Config/constants.php';
// require_once BASE_DIR . '/vendor/autoload.php';

if (!session_id()) {
    session_start();
}

// $dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__);
// $dotenv->load();
// dd($_SERVER);
var_dump($_SERVER);

echo '</br>Hello World';
