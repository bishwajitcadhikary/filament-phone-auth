<?php

return [

    'label' => 'Configurar',

    'modal' => [

        'heading' => 'Configurar codis de verificació telefònica',

        'description' => 'Hauràs d\'introduir el codi de 6 dígits que enviem al teu número de telèfon cada vegada que inicies sessió o realitzes accions sensibles. Comprova el teu telèfon per veure el codi de 6 dígits per completar la configuració.',

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
                'label' => 'Activar codis de verificació telefònica',
            ],

        ],

    ],

    'notifications' => [

        'enabled' => [
            'title' => 'S\'han activat els codis de verificació telefònica',
        ],

    ],

];
