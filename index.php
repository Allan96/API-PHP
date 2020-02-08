<?php
header('Content-type:application/json;charset=utf-8');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
define('CASHFORCE_WEBAPP', 1);
define('PROJECT_ROOT_PATH', __DIR__);
include_once PROJECT_ROOT_PATH . '/global.php';

Html::page();
?>
