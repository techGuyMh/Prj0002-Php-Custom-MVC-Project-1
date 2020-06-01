<?php
$indexFileUrl = "public/index.php";

define('WEBROOT', str_replace($indexFileUrl, "", $_SERVER["SCRIPT_NAME"]));
define('ROOT', str_replace($indexFileUrl, "", $_SERVER["SCRIPT_FILENAME"]));


require_once(ROOT."/autoload.php");

// including application config variables
$config['app'] = require(ROOT.'/config/app.php');
$config['database'] = require(ROOT.'/config/database.php');

// including classes namespace
use mhFramework\routing\Dispatcher;

// init dispatcher
$dispatch = new Dispatcher();
$dispatch->dispatch();


