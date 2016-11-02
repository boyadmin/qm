<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'name'=>'品途管理',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    "modules" => [
    "admin" => [
        "class" => "mdm\admin\Module",
		 ],
	],
"aliases" => [
    "@mdm/admin" => "@vendor/mdmsoft/yii2-admin",
	],
'as access' => [
    
     'class' => 'mdm\admin\components\AccessControl',
    'allowActions' => [
        //这里是允许访问的action
        'admin/*',
    // * 表示允许所有，后期会介绍这个
     //   '*'
    ],
    
],
 'components' => [
     'request' => [
        'csrfParam' => '_backendCSRF',
        'csrfCookie' => [
            'httpOnly' => true,
            'path' => '/admin',
        ],
    ],
    'user' => [
        'identityCookie' => [
            'name' => '_backendIdentity',
            'path' => '/admin',
            'httpOnly' => true,
        ],
    ],
    'session' => [
        'name' => 'BACKENDSESSID',
        'cookieParams' => [
            'path' => '/admin',
        ],
    ],
 
  "authManager" => [
        "class" => 'yii\rbac\DbManager',
        "defaultRoles" => ["注册用户"],
		 
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
        'i18n' => [
            'translations' => [
                'app' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    //'basePath' => '/messages',
                    'fileMap' => [
                        'app' => 'app.php',
                    ],
                ],
                'power' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    //'basePath' => '/messages',
                    'fileMap' => [
                        'power' => 'power.php',
                    ],
                ],
            ],
        ],

        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
		"urlManager" => [
    //���ڱ��� urlManager �Ƿ�����URL��������
		  "enablePrettyUrl" => true,
    // �Ƿ���URL����ʾ��ڽű�
		  "showScriptName" => true,
		              'rules' => [
               // '' => 'site/index',

                '' => 'site/index',
                'info' => 'info/index',
                'fruit' => 'fruit/index',
                'web' => 'web/index',
                'admin' => 'admin/index',
                'route' => 'admin/route/index',
                'permission' => 'admin/permission/index',
                'role' => 'admin/role/index',
                'assignment' => 'admin/assignment/index',
                'menu' => 'admin/menu/index',
                'pwd' => 'admin/user/change-password',
                'u' => 'admin/user/index',
                'signup' => 'admin/user/signup',
				
                
                

                '<controller:\w+>/<action:\w+>/<page:\d+>:<per-page:\d+>' => '<controller>/<action>',
 
            ],
			],
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */
    ],
    'params' => $params,
];
