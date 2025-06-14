<?php

return [

    'label' => 'Dezactivează',

    'modal' => [

        'heading' => 'Dezactivează codurile de verificare prin telefon',

        'description' => 'Sigur doriți să nu mai primiți coduri de verificare prin telefon? Dezactivarea acestei opțiuni va elimina un strat suplimentar de securitate din contul dvs.',

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

            'disable' => [
                'label' => 'Dezactivează',
            ],

        ],

        'notifications' => [

            'disabled' => [
                'title' => 'Codurile de verificare prin telefon au fost dezactivate',
            ],

        ],

    ],

];