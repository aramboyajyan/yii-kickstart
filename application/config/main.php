<?php

/**
 * @file
 * Main configuration.
 *
 * Created by: Topsitemakers
 * http://www.topsitemakers.com/
 */

return array(

	/**
	 * Application settings
	 * Note: we renamed the default "protected" folder to "application".
	 */
	'basePath' => dirname(__FILE__).DIRECTORY_SEPARATOR.'../../application/',
  'runtimePath' => dirname(__FILE__).DIRECTORY_SEPARATOR.'../../application/',
	'name' => 'Private',
  'theme' => 'classic',
  
  /**
   * Components that should be preloaded.
   */
	'preload' => array(
		'log',
	),
  
  /**
   * Application models and components to be imported automatically.
   */
	'import' => array(
		'application.models.*',
		'application.components.*',
	),

	/**
	 * Application modules.
	 */
	'modules' => array(
		'gii' => array(
			'class' => 'system.gii.GiiModule',
			'password' => '123456',
			'ipFilters' => array('127.0.0.1','::1'),
		),
	),

	/**
	 * Application components.
	 */
	'components' => array(

		// User settings.
		'user' => array(
			'allowAutoLogin' => TRUE,
		),

		// Path settings.
		'urlManager' => array(
			'urlFormat' => 'path',
      'showScriptName' => FALSE,
			'rules' => array(
				'<controller:\w+>/<id:\d+>' => '<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
				'<controller:\w+>/<action:\w+>' => '<controller>/<action>',
			),
		),

		// Database settings.
		'db' => array(
			'connectionString' => 'mysql:host=localhost;dbname=database',
			'emulatePrepare' => TRUE,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),

		// Error handling.
		'errorHandler' => array(
      'errorAction' => 'site/error',
    ),

		// Logging.
		'log' => array(
			'class' => 'CLogRouter',
			'routes' => array(
				array(
					'class' => 'CFileLogRoute',
					'levels' => 'error, warning',
				),
				/*
				// Show log messages on web pages. Use only during development.
				array(
					'class' => 'CWebLogRoute',
				),
				*/
			),
		),

	),

	// Global application parameters
	'params' => array(
		'adminEmail' => 'admin@domain.com',
	),
  
);
