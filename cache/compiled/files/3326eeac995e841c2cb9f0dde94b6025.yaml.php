<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/grav/webdesign/grav-admin/user/themes/wdgdesign/blueprints.yaml',
    'modified' => 1553243421,
    'data' => [
        'name' => 'Wdgdesign',
        'version' => '0.1.0',
        'description' => 'agency theme',
        'icon' => 'rebel',
        'author' => [
            'name' => 'Arnaud Arnaud-Baunel Tiphaine Christophe',
            'email' => 'm.ch55000@gmail.com'
        ],
        'homepage' => 'https://github.com/arnaud-arnaud-baunel-tiphaine-christophe/grav-theme-wdgdesign',
        'demo' => 'http://demo.yoursite.com',
        'keywords' => 'grav, theme, etc',
        'bugs' => 'https://github.com/arnaud-arnaud-baunel-tiphaine-christophe/grav-theme-wdgdesign/issues',
        'readme' => 'https://github.com/arnaud-arnaud-baunel-tiphaine-christophe/grav-theme-wdgdesign/blob/develop/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in Menu',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
