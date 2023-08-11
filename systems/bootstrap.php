<?php


session_start();

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)) . DS);
define('SYSTEM', ROOT . 'systems' . DS);


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(-1);


mb_internal_encoding('UTF-8');

date_default_timezone_set('Asia/Ho_Chi_Minh');

require_once(ROOT . 'configs' . DS . 'init.php');
require_once(ROOT . 'configs' . DS . 'database.php');
require_once(SYSTEM . 'functions.php');
