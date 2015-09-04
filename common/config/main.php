<?php
return [
    // Set default timezone to Asia/Manila
    'timeZone' => 'Asia/Manila',
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
