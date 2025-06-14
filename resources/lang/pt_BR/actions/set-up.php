<?php

return [

    'label' => 'Configurar',

    'modal' => [

        'heading' => 'Configurar códigos de verificação por telefone',

        'description' => 'Você precisará inserir o código de 6 dígitos que enviamos para seu número de telefone cada vez que fizer login ou realizar ações sensíveis. Verifique seu telefone para obter um código de 6 dígitos para concluir a configuração.',

        'form' => [

            'code' => [

                'label' => 'Digite o código de 6 dígitos que enviamos para seu telefone',

                'validation_attribute' => 'code',

                'actions' => [

                    'resend' => [

                        'label' => 'Enviar um novo código para seu telefone',

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

        'actions' => [

            'set_up' => [
                'label' => 'Configurar',
            ],

        ],

        'notifications' => [

            'enabled' => [
                'title' => 'Códigos de verificação por telefone foram ativados',
            ],

        ],

    ],

];
