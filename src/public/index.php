<?php
/**
 * @author Eric Heinzl <eric.heinzl@gmail.com>
 * @package xPand4B/SQL-Aufgaben
 * 
 * @copyright 2019 Eric Heinzl
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| the application.This part is needed so that I don't have to worry
| about manual loading any classes later on.
|
*/

require_once __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
|
| This will create an instance, bootstraps the application and gets it
| ready for use, then it will load up this application.
|
*/

$app = new App\Core\Application;
