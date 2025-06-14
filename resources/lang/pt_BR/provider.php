<?php

return [

    'management_schema' => [

        'actions' => [

            'label' => 'Códigos de verificação por telefone',

            'below_content' => 'Receba um código temporário em seu número de telefone para verificar sua identidade durante o login.',

            'messages' => [
                'enabled' => 'Ativado',
                'disabled' => 'Desativado',
            ],

        ],

    ],

    'login_form' => [

        'label' => 'Enviar um código para seu telefone',

        'code' => [

            'label' => 'Digite o código de 6 dígitos que enviamos para seu telefone',

            'validation_attribute' => 'code',

            'actions' => [

                'resend' => [

                    'label' => 'Enviar um novo código por telefone',

                    'notifications' => [

                        'resent' => [
                            'title' => 'Enviamos um novo código para seu telefone',
                        ],

                    ],

                ],

            ],

            'messages' => [
                'invalid' => 'O código que você digitou é inválido.',
            ],
        ],
    ],
];
