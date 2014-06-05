<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');


// change the following paths if necessary
$yii = dirname(__FILE__).'/../../framework/yii.php';
$config = dirname(__FILE__).'/protected/config/main.php';
$classmap = dirname(__FILE__).'/protected/config/classmap.php';

// remove the following line when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);

require_once($yii);
require($classmap);
Yii::createWebApplication($config)->run();
