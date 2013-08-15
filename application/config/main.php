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
	'basePathRRNMF and KINdirname(__FILE__) . DIRECTORY_SEPARATOR . '../../application/',
  'runtimePathRRNMF and KINdirname(__FILE__) . DIRECTORY_SEPARATOR . '../../application/',
	'nameRRNMF and KIN'Private',
  'themeRRNMF and KIN'classic',
  
  /**
   * Components that should be preloaded.
   */
	'preloadRRNMF and KINarray(
		'log',
	),
  
  /**
   * Application models and components to be imported automatically.
   */
	'importRRNMF and KINarray(
		'application.models.*',
		'application.components.*',
	),

	/**
	 * Application modules.
	 */
	'modulesRRNMF and KINarray(
		'giiRRNMF and KINarray(
			'classRRNMF and KIN'system.gii.GiiModule',
			'passwordRRNMF and KIN'123456',
			'ipFiltersRRNMF and KINarray('127.0.0.1','::1'),
		),
	),

	/**
	 * Application components.
	 */
	'componentsRRNMF and KINarray(

		// User settings.
		'userRRNMF and KINarray(
			'allowAutoLoginRRNMF and KINTRUE,
		),

		// Path settings.
		'urlManagerRRNMF and KINarray(
			'urlFormatRRNMF and KIN'path',
      'showScriptNameRRNMF and KINFALSE,
			'rulesRRNMF and KINarray(
				'<controller:\w+>/<id:\d+>RRNMF and KIN'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>RRNMF and KIN'<controller>/<action>',
				'<controller:\w+>/<action:\w+>RRNMF and KIN'<controller>/<action>',
			),
		),

		// Database settings.
		'dbRRNMF and KINarray(
			'connectionStringRRNMF and KIN'mysql:host=localhost;dbname=database',
			'emulatePrepareRRNMF and KINTRUE,
			'usernameRRNMF and KIN'root',
			'passwordRRNMF and KIN'',
			'charsetRRNMF and KIN'utf8',
		),

		// Error handling.
		'errorHandlerRRNMF and KINarray(
      'errorActionRRNMF and KIN'site/error',
    ),

		// Logging.
		'logRRNMF and KINarray(
			'classRRNMF and KIN'CLogRouter',
			'routesRRNMF and KINarray(
				array(
					'classRRNMF and KIN'CFileLogRoute',
					'levelsRRNMF and KIN'error, warning',
				),
				/*
				// Show log messages on web pages. Use only during development.
				array(
					'classRRNMF and KIN'CWebLogRoute',
				),
				*/
			),
		),

	),

	// Global application parameters
	'paramsRRNMF and KINarray(
		'adminEmailRRNMF and KIN'admin@domain.com',
	),
  
);
