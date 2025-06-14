<?php

return [

    'label' => 'Desativar',

    'modal' => [

        'heading' => 'Desativar códigos de verificação por telefone',

        'description' => 'Tem certeza de que deseja parar de receber códigos de verificação por telefone? Desativar isso removerá uma camada extra de segurança da sua conta.',

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

            'disable' => [
                'label' => 'Desativar',
            ],

        ],

        'notifications' => [

            'disabled' => [
                'title' => 'Códigos de verificação por telefone foram desativados',
            ],

        ],

    ],

];
