<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Seguimiento Egresados de Colegios',
        
	// preloading 'log' component
	'preload'=>array('log','bootstrap'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
                'ext.giix-components.*', // giix components
                'ext.bootstrap-theme.widgets.*',
		'ext.bootstrap-theme.helpers.*',
		'ext.bootstrap-theme.behaviors.*',
                'application.extensions.bootstrap.*',
            
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
                        'class'=>'system.gii.GiiModule',
                        'generatorPaths' => array(
                                'ext.giix-core', // giix generators
                                'ext.bootstrap-theme.gii',
                                //'bootstrap.gii',
                        ),
			
			'password'=>'pianosalsa',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format
		/*
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		*/
//		'db'=>array(
//			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
//		),
		// uncomment the following to use a MySQL database
		 'bootstrap'=>array(
                    'class'=>'ext.bootstrap.components.Bootstrap', // assuming you extracted bootstrap under extensions
                     
                ),
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=rumbos',
			'emulatePrepare' => true,
			'username' => 'rumbos',
			'password' => 'rumbos',
			'charset' => 'utf8',
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);