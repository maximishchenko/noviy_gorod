<?php
return [
    'name' => 'Новострой',
    'timezone'=> 'Europe/Moscow',
    'language' => 'ru-RU',

    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'bootstrap' => [
        'configManager',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'configManager' => [
            'class' => 'yii2tech\config\Manager',
            'autoRestoreValues' => true,
            'cacheDuration' => 3600,
            'storage' => [
                'class' => 'yii2tech\config\StoragePhp',
                'fileName' => "@frontend/runtime/app_config.php",
            ],
            'items' => [
                'contactPhone' => [
                    'path' => 'phone',
                    'label' => Yii::t('app', "CONTACT_PHONE"),
                    'description' => Yii::t('app', "CONTACT_PHONE DESCRIPTION"),
                    'value' => "+7 (987) 654-32-10",
                    'rules' => [
                        ['required']
                    ],
                    'inputOptions' => [
                        'type' => 'phone',
                    ],
                ],
                'contactEmail' => [
                    'path' => 'email',
                    'label' => Yii::t('app', "CONTACT_EMAIL"),
                    'description' => Yii::t('app', "CONTACT_EMAIL DESCRIPTION"),
                    'value' => "info@company.org",
                    'rules' => [
                        ['required'],
                        ['email']
                    ],
                ],
                'contactAddress' => [
                    'path' => 'address',
                    'label' => Yii::t('app', "CONTACT_ADDRESS"),
                    'description' => Yii::t('app', "CONTACT_ADDRESS DESCRIPTION"),
                    'value' => "Ставропольский край, г. Минеральные Воды пр-кт 22 Партсъезда, 96/1, офис 1",
                    'rules' => [
                        ['required'],
                    ],
                    'inputOptions' => [
                        'type' => 'textarea',
                    ],
                ],
                'seoDefaultKeywords' => [
                    'path' => 'seo_keywords',
                    'label' => Yii::t('app', "SEO_KEYWORDS"),
                    'description' => Yii::t('app', "SEO_KEYWORDS KEYWORDS"),
                    'value' => "Новострой",
                    'rules' => [
                    ],
                ],
                'seoDefaultDescription' => [
                    'path' => 'seo_description',
                    'label' => Yii::t('app', "SEO_DESCRIPTION"),
                    'description' => Yii::t('app', "SEO_DESCRIPTION DESCRIPTION"),
                    'value' => "Новострой",
                    'rules' => [
                    ],
                    'inputOptions' => [
                        'type' => 'textarea',
                    ],
                ],
                'isWebSiteOffline' => [
                    'path' => 'is_website_offline',
                    'label' => Yii::t('app', "IS_WEBSITE_OFFLINE"),
                    'description' => Yii::t('app', "IS_WEBSITE_OFFLINE DESCRIPTION"),
                    'value' => false,
                    'rules' => [
                    ],
                    'inputOptions' => [
                        'type' => 'checkbox',
                    ],
                ],
            ],
        ],

        'cache' => [
            'class' => \yii\caching\FileCache::class,
        ],
    ],
];
