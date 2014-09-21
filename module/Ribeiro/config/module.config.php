<?php

return [

    'router' => [
        'routes' => [
            'ribeiro-home' => [
                'type' => 'Literal',
                'options' => [
                    'route' => '/ribeiro',
                    'defaults' => [
                        'controller' => 'Ribeiro\Controller\Index',
                        'action'     => 'index'
                    ]
                ]
            ],
            'ribeiro-contact' => [
                'type' => 'Literal',
                'options' => [
                    'route' => '/contact',
                    'defaults' => [
                        'controller' => 'Ribeiro\Controller\Index',
                        'action'     => 'contact'
                    ]
                ]
            ]
        ]
    ],

    'controllers' => [
        'invokables' => [
            'Ribeiro\Controller\Index' => 'Ribeiro\Controller\IndexController'
        ]
    ],

    'view_manager' => [
        'template_path_stack' => [
            __DIR__.'/../view'
        ]
    ]

];