<?php
/**
 * This file is generated by the "yii asset" command.
 * DO NOT MODIFY THIS FILE DIRECTLY.
 * @version 2024-03-26 14:23:17
 */
return [
    'all' => [
        'class' => 'frontend\\assets\\AppAsset',
        'basePath' => '@webroot/',
        'baseUrl' => '@web/',
        'jsOptions' => [
            'defer' => 'defer',
        ],
        'js' => [
            'assets/all-4a022591f970cf422ad32c6ee320b1e8.min.js',
        ],
        'css' => [
            'assets/all-451b18dd7218154c3f6380b1c50f47b7.min.css',
        ],
        'depends' => [],
        'sourcePath' => null,
    ],
    'frontend\\assets\\NpmAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'all',
        ],
    ],
    'frontend\\assets\\FancyboxAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'all',
        ],
    ],
    'frontend\\assets\\AppAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'frontend\\assets\\NpmAsset',
            'frontend\\assets\\FancyboxAsset',
            'all',
        ],
    ],
];