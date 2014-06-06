<?php

// change the following paths if necessary
//$yiit=dirname(__FILE__).'/../../../YiiRoot/framework/yiit.php';
$yiit = '/var/www/html/YiiRoot/framework/yiit.php';
//$config=dirname(__FILE__).'/../config/test.php';
$config='/var/www/html/trackstar/protected/config/test.php';

require_once($yiit);
//require_once(dirname(__FILE__).'/WebTestCase.php');
require_once('/var/www/html/trackstar/protected/tests/WebTestCase.php');

Yii::createWebApplication($config);
