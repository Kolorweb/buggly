<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'homeUrl'=>array('site/index'),


// yii 2.0 user registration
    'modules' => [
    'user' => [
        'class' => 'dektrium\user\Module',
        'enableUnconfirmedLogin' => TRUE,
       
    ],
],



    'components' => [

        'urlManager' => [
          'showScriptName' => false,
          'enablePrettyUrl' => true,

        ],  





        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'vxCzJbgtuvCwvZzxwhDETt850ZeFdO8L',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        // 'user' => [
        //     'identityClass' => 'app\models\User',
        //     'enableAutoLogin' => true,
        // ],

        

        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
    //     'mailer' => [
    //     'class' => 'yii\swiftmailer\Mailer',
    //     'viewPath' => '@app/mailer',
    //     'useFileTransport' => false,
    //     'transport' => [
    //         'class' => 'Swift_SmtpTransport',
    //         'host' => 'smtpout.europe.secureserver.net',
    //         'username' => 'kolorweb@kolorweb.com',
    //         'password' => 'Pepperoni123',
    //         'port' => '587',
    //         'encryption' => 'tls',
    //                     ],
    // ],
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = 'yii\debug\Module';

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = 'yii\gii\Module';
}

return $config;
