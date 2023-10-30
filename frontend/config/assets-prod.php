<?php
/**
 * This file is generated by the "yii asset" command.
 * DO NOT MODIFY THIS FILE DIRECTLY.
 * @version 2023-10-30 20:17:44
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
            'assets/all.min.js',
        ],
        'css' => [
            'assets/all.min.css',
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