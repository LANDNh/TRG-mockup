<?php
/**
 * Craft web bootstrap file
 */
error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
ini_set('display_errors', 'Off');

// Load shared bootstrap
require dirname(__DIR__) . '/bootstrap.php';

// Load and run Craft
/** @var craft\web\Application $app */
$app = require CRAFT_VENDOR_PATH . '/craftcms/cms/bootstrap/web.php';
$app->run();

phpinfo();
die();
