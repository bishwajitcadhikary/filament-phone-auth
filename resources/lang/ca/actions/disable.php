<?php

return [

    'label' => 'Desactivar',

    'modal' => [

        'heading' => 'Desactivar codis de verificació telefònica',

        'description' => 'Esteu segur que voleu deixar de rebre codis de verificació telefònica? Desactivar això eliminarà una capa addicional de seguretat del vostre compte.',

        'form' => [

            'code' => [

                'label' => 'Introduïu el codi de 6 dígits que us hem enviat al telèfon',

                'validation_attribute' => 'codi',

                'actions' => [

                    'resend' => [

                        'label' => 'Enviar un nou codi al vostre telèfon',

                        'notifications' => [

                            'resent' => [
                                'title' => 'Us hem enviat un nou codi al telèfon',
                            ],

                        ],

                    ],

                ],

                'messages' => [

                    'invalid' => 'El codi que heu introduït no és vàlid.',

                ],

            ],

        ],

        'actions' => [

            'submit' => [
                'label' => 'Desactivar codis de verificació telefònica',
            ],

        ],

    ],

    'notifications' => [

        'disabled' => [
            'title' => 'S\'han desactivat els codis de verificació telefònica',
        ],

    ],

];
