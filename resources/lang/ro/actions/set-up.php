<?php

return [

    'label' => 'Configurează',

    'modal' => [

        'heading' => 'Configurează codurile de verificare prin telefon',

        'description' => 'Va trebui să introduceți codul de 6 cifre pe care îl trimitem pe numărul dvs. de telefon de fiecare dată când vă conectați sau efectuați acțiuni sensibile. Verificați-vă telefonul pentru un cod de 6 cifre pentru a finaliza configurarea.',

        'form' => [

            'code' => [

                'label' => 'Introduceți codul de 6 cifre pe care l-am trimis pe telefonul dvs.',

                'validation_attribute' => 'code',

                'actions' => [

                    'resend' => [

                        'label' => 'Trimite un nou cod pe telefonul tău',

                        'notifications' => [

                            'resent' => [
                                'title' => 'V-am trimis un nou cod pe telefonul dvs.',
                            ],

                        ],

                    ],

                ],

                'messages' => [

                    'invalid' => 'Codul pe care l-ați introdus este invalid.',

                ],

            ],

        ],

        'actions' => [

            'set_up' => [
                'label' => 'Configurează',
            ],

        ],

        'notifications' => [

            'enabled' => [
                'title' => 'Codurile de verificare prin telefon au fost activate',
            ],

        ],

    ],

];
