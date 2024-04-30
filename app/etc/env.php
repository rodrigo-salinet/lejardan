<?php
return [
    'backend' => [
        'frontName' => 'admin123'
    ],
    'cache' => [
        'graphql' => [
            'id_salt' => 'K9w7vtfU2RvXniIxdN12q5Nlz90oH3JF'
        ],
        'frontend' => [
            'default' => [
                'id_prefix' => 'de3_'
            ],
            'page_cache' => [
                'id_prefix' => 'de3_'
            ]
        ],
        'allow_parallel_generation' => false
    ],
    'remote_storage' => [
        'driver' => 'file'
    ],
    'queue' => [
        'consumers_wait_for_messages' => 1
    ],
    'crypt' => [
        'key' => 'n5oomiicdxuvrueht1mdzbo3hjeih0nn'
    ],
    'db' => [
        'table_prefix' => 'mgcr_',
        'connection' => [
            'default' => [
                'host' => 'localhost',
                'dbname' => 'lejard14_magen77',
                'username' => 'lejard14_magen77',
                'password' => 'M3ES94p[.8',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'driver_options' => [
                    1014 => false
                ]
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'default',
    'session' => [
        'save' => 'db'
    ],
    'lock' => [
        'provider' => 'db'
    ],
    'directories' => [
        'document_root_is_pub' => true
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'full_page' => 1,
        'config_webservice' => 1,
        'translate' => 1
    ],
    'downloadable_domains' => [
        'lejardan.com.br'
    ],
    'install' => [
        'date' => 'Tue, 12 Mar 2024 16:40:44 -0300'
    ]
];
