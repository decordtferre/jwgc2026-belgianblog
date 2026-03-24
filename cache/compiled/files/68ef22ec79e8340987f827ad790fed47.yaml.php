<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/user/decordtferre/www/user/config/site.yaml',
    'modified' => 1774383686,
    'size' => 349,
    'data' => [
        'title' => 'JWGC2026 - Belgian Juniors Blog',
        'default_lang' => 'en',
        'author' => [
            'name' => 'Ferre De Cordt',
            'email' => 'gliding@belgianjuniors.be'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Blog for the Belgian juniors at JWGC2026'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'redirects' => NULL,
        'routes' => NULL,
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
