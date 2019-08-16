<?php 
session_start();
require_once("vendor/autoload.php");

use \Slim\Slim;
use \Abrace\Page;

$app = new Slim();

$app->config('debug', true);

require_once("site.php");
require_once("functions.php");

$app->run();

 ?>