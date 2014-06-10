<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
Yii::setPathOfAlias('bootstrap', dirname(__FILE__) . '/../extensions/bootstrap');
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => '智选',
    'defaultController' => 'index',
    // preloading 'log' component
    'preload' => array('log'),
    // autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.components.*',
    ),
    'theme' => 'bootstrap',
    'modules' => array(
        // uncomment the following to enable the Gii tool
        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'password' => 'xiaoxiaoyi',
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
            'ipFilters' => array('127.0.0.1', '::1'),
            'generatorPaths' => array(
                'bootstrap.gii',
            ),
        ),
        'admin',
    ),
    // application components
    'components' => array(
        'bootstrap' => array(
            'class' => 'bootstrap.components.Bootstrap',
        ),
        'user' => array(
            // enable cookie-based authentication
            'class' => 'User',
            'allowAutoLogin' => true,
            'stateKeyPrefix' => 'user',
        ),
        
        'admin' => array(
            // enable cookie-based authentication
           'class' => 'Admin',
           'allowAutoLogin' => true,
           'stateKeyPrefix' => 'admin',
        ),
        // uncomment the following to enable URLs in path-format
        
          'urlManager'=>array(
          'urlFormat'=>'path',
          'showScriptName'=>false,
          'rules'=>array(
          'ask/filter/<filter:.*>'=>'ask/index',
          'course/filter/<filter:.*>'=>'course/index',
          'course/order/<type:\d+>/<id:\d+>'=>'course/order',
          'course/pay/<type:\d+>/<id:\d+>/<model:\d+>'=>'course/order',
          '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
          '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
          ),
          ),
         
//		'db'=>array(
//			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
//		),
        // uncomment the following to use a MySQL database
        'db' => array(
            'connectionString' => 'mysql:host=localhost;dbname=zhixuan',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
            'tablePrefix' => 'zx_',
        ),
        'mailer' => array(
            'class' => 'application.extensions.mailer.EMailer',
            'pathViews' => 'application.views.email',
            'pathLayouts' => 'application.views.email.layouts',
            'from' => 'zxcvbnmliuzihui@163.com',
            'fromname' => '智选系统管理员',
            'username' => "zxcvbnmliuzihui@163.com",
            'password' => 'a2358869'
        ),
        'errorHandler' => array(
            // use 'site/error' action to display errors
            'errorAction' => 'site/error',
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
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
    'params' => array(
        // this is used in contact page
        'adminEmail' => 'soothion@sina.com',
        'score' => array(
            'askCommit' => 5,
            'courseCommit' => 5,
            'experienceCommit' => 5,
            'contribute' => 10,
            'answer' => 10,
            'toRMB' => 0.1,
        ),
    ),
);
