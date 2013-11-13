<?php

// This is the configuration for yiic console application.
// Any writable CConsoleApplication properties can be configured here.

$consoleConfig = array();

// Logging
$consoleConfig['components']['log']['routes'][] = array(
    'class' => 'CFileLogRoute',
    'levels' => 'error, warning',
    'logFile' => 'console.log',
);

$mainConfig = require_once dirname(__FILE__) . '/main.php';
return CMap::mergeArray($mainConfig, $consoleConfig);