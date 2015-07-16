<?php

 // var_dump($_SERVER['REMOTE_ADDR']);
	// 			 die;

// var_dump($_FILE_);
// die;
	

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Web Application',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		/*
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'Enter Your Password Here',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		*/
	),

	// application components
	'components'=>array(

		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),

		// uncomment the following to enable URLs in path-format
		
		// 'urlManager'=>array(
		// 	//'routeVar'=>'route',
		// 	'urlFormat'=>'path',
		// 	'showScriptName'=>'false',
		// 	'rules'=>array(
			
		// 		'<controller:\w+>/<id:\d+>'=>'<controller>/view',
		// 		'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
		// 		'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
		// 	),
		// ),
		

		// database settings are configured in database.php
		'db'=>require(dirname(__FILE__).'/database.php'),

		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),

		'session'=>array(
            'class' => 'CDbHttpSession',
            'connectionID' => 'db',
            'sessionTableName' => 'dbsession',
        ),

		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				
				// array(
				// 	'class'=>'CWebLogRoute',
				// ),
				
				 // array(
	    //             'class'=>'ext.yii-debug-toolbar.YiiDebugToolbarRoute',
	    //             'ipFilters'=>array('127.0.0.1','::1'),
	    //         ),

				
				 // array(
	    //             'class' => 'ext.phpconsole.PhpConsoleLogRoute',
	    //             'handleErrors' => true,
	    //             'handleExceptions' => true,
	    //             'sourcesBasePath' => $_SERVER['DOCUMENT_ROOT'],
	            
	    //         )
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
