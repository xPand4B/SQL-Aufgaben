<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Load composer-autoload
require_once __DIR__.'/../vendor/autoload.php';

// Load .env file as environment variable
$dotenv = Dotenv\Dotenv::create(__DIR__.'/../../');
$dotenv->load();
