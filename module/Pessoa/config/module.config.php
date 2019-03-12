<?php

namespace Pessoa;

return [
    'router' => [
        'routes' => [
            'pessoa' => [
                'type' => \Zend\Router\Http\Segment::class,
                'options' => [
                    'route' => '/pessoa[/:action[/:id]]',
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*', //definindo qual tipo de dado pode ser passado
                        'id' => '[0-9]+'
                    ],
                    'default' => [
                        'controller' => Controller\PessoaController::class,
                        'action' => 'index',
                    ],
                ],
            ],
        ],
    ],
    'view_manager' => [
        'tamplate_path_stack' => [
            'pessoa' => __DIR__ . '/../view',
        ],
    ],
];
// / pessoa/listar/todos
// / pessoa/editar/1
