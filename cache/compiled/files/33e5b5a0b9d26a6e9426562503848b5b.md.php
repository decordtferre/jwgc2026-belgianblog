<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/home/user/decordtferre/www/user/pages/02.blog/blog.md',
    'modified' => 1774383686,
    'size' => 509,
    'data' => [
        'header' => [
            'title' => 'JWGC 2026 Blog',
            'visible' => true,
            'routable' => true,
            'menu' => 'Blog',
            'content' => [
                'items' => '@self.children',
                'limit' => 20,
                'order' => [
                    'by' => 'last',
                    'dir' => 'desc'
                ],
                'pagination' => true
            ]
        ],
        'frontmatter' => 'title: JWGC 2026 Blog
visible: true
routable: true
menu: Blog
content:
    items: \'@self.children\'
    limit: 20
    order:
        by: last
        dir: desc
    pagination: true',
        'markdown' => '# Blog
Welcome to our official JWGC 2026 blog. Below you can find all the daily updates from the Belgian juniors at Aalen-Elchingen. Each post includes our personal stories from the cockpit and the official daily scores integrated from SoaringSpot. Don\'t forget to check the live tracker on the homepage during the race!'
    ]
];
