<?php
/**
 * Created by PhpStorm.
 * User: jrey
 * Date: 21/02/2017
 * Time: 17:04
 */
return [
    'class' => 'yii\web\UrlManager',
    'baseUrl' => '/',
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'enableStrictParsing' => true,
    // 'suffix'          => false,
    'rules' => [
        '/' => 'site/index',
        '/<action:\w+>' => 'site/<action>',
        '<controller:\w+>/<id:\d+>' => '<controller>/view',
        '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
        '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
        'request-password-reset' => 'site/request-password-reset',
        'reset-password' => 'site/reset-password',
        /*
        'about' => 'site/about',
        'contact' => 'site/contact',
        'login' => 'site/login',
        'logout' => 'site/logout',
        'captcha' => 'site/captcha',
        'signup' => 'site/signup',
        'request-password-reset' => 'site/request-password-reset',
        'reset-password' => 'site/reset-password',
        '<alias:\w+>' => 'site/<alias>',
        */
    ],
];