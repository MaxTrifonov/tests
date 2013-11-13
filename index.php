<?php

mb_internal_encoding( "UTF-8" );
// Composer
require_once dirname(__FILE__) . '/vendor/autoload.php';

// change the following paths if necessary
$yii = dirname(__FILE__) . '/vendor/yiisoft/yii/framework/yii.php';
$config = dirname(__FILE__) . '/app/config/main.php';

require_once($yii);
Yii::createWebApplication($config)->run();
