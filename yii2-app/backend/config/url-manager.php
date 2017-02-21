<?php
/**
 * Created by PhpStorm.
 * User: jrey
 * Date: 21/02/2017
 * Time: 17:03
 */
return [
    'class' => 'yii\web\UrlManager',
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'enableStrictParsing' => true,
    'baseUrl' => '/backend',
    // 'languages' => ['es','en'],
    // 'suffix'  => false,
    'rules' => [
        '/' => 'site/index',
        '<controller:\w+>/<id:\d+>' => '<controller>/view',
        '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
        '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
        '<module:\w+>/<controller:\w+>/<id:\d+>' => '<module>/<controller>/view',
        '<module:\w+>/<controller:\w+>/<action:\w+>/<id:\d+>' => '<module>/<controller>/<action>',
        '<module:\w+>/<controller:\w+>/<action:\w+>' => '<module>/<controller>/<action>',
        'request-password-reset' => 'admin/user/request-password-reset',
        'reset-password' => 'admin/user/reset-password',
    ],
];