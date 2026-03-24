<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/home/user/decordtferre/www/user/pages/01.home/modular.md',
    'modified' => 1774383686,
    'size' => 251,
    'data' => [
        'header' => [
            'title' => 'JWGC 2026 - Belgian Juniors',
            'onpage_menu' => false,
            'content' => [
                'items' => '@self.modular',
                'order' => [
                    'by' => 'default',
                    'dir' => 'asc',
                    'custom' => [
                        0 => '_hero',
                        1 => '_welcome',
                        2 => '_tracking',
                        3 => '_results'
                    ]
                ]
            ]
        ],
        'frontmatter' => 'title: JWGC 2026 - Belgian Juniors
onpage_menu: false
content:
    items: \'@self.modular\'
    order:
        by: default
        dir: asc
        custom:
            - _hero
            - _welcome
            - _tracking
            - _results',
        'markdown' => ''
    ]
];
