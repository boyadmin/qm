<?php

$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'), require(__DIR__ . '/../../common/config/params-local.php'), require(__DIR__ . '/params.php'), require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'urlManager' => [

            'enablePrettyUrl' => true,
//    'enableStrictParsing' => true,    //严格的理由
            'showScriptName' => false,   // 去掉 index.php 的的
            'rules' => [
                '' => '/site/index',
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                'pro' => 'pro/index',
                'news' => 'news/index',
                'page' => 'page/index',
                'channel' => 'channel/index',
                'about' => 'site/about',
                'contact' => 'site/contact',
                'signup' => 'site/signup',
                'login' => 'site/login',
            ],
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
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
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
    ],
    'params' => $params,
];
?>
<div style="text-align: center"
