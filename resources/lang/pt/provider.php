<?php

return [
    'management_schema' => [
        'actions' => [
            'label' => 'Códigos de verificação telefónica',
            'below_content' => 'Receba um código temporário no seu número de telefone para verificar a sua identidade durante o início de sessão.',
            'messages' => [
                'enabled' => 'Ativado',
                'disabled' => 'Desativado',
            ],
        ],
    ],
    'login_form' => [
        'label' => 'Enviar um código para o seu telefone',
        'code' => [
            'label' => 'Introduza o código de 6 dígitos que enviamos para o seu telefone',
            'validation_attribute' => 'código',
            'actions' => [
                'resend' => [
                    'label' => 'Enviar um novo código para o telefone',
                    'notifications' => [
                        'resent' => [
                            'title' => 'Enviamos-lhe um novo código para o seu telefone',
                        ],
                    ],
                ],
            ],
            'messages' => [
                'invalid' => 'O código que introduziu é inválido.',
            ],
        ],
    ],
];
