<?php
require_once 'Router.php';
require_once 'lib/Controller.php';
require_once 'lib/View.php';

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

$router = new Router();