<?php

/**
 * @file
 * Application entry point.
 *
 * Created by: Topsitemakers
 * http://www.topsitemakers.com/
 */

// Load the framework; update this to reflect the actual path to Yii
$yii = dirname(__FILE__) . '/../framework/yii.php';

// Configuration
$config = dirname(__FILE__) . '/application/config/main.php';

// Debugging and tracing; remove in production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL', 3);

// Get our helper and Yii
require_once('application/helpers/main.php');
require_once($yii);

// Start the app
Yii::createWebApplication($config)->run();
