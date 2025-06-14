<?php

return [

    'management_schema' => [

        'actions' => [

            'label' => 'Coduri de verificare prin telefon',

            'below_content' => 'Primiți un cod temporar pe numărul dvs. de telefon pentru a vă verifica identitatea în timpul autentificării.',

            'messages' => [
                'enabled' => 'Activat',
                'disabled' => 'Dezactivat',
            ],

        ],

    ],

    'login_form' => [

        'label' => 'Trimite un cod pe telefonul tău',

        'code' => [

            'label' => 'Introduceți codul de 6 cifre pe care vi l-am trimis prin telefon',

            'validation_attribute' => 'code',

            'actions' => [

                'resend' => [

                    'label' => 'Trimite un nou cod prin telefon',

                    'notifications' => [

                        'resent' => [
                            'title' => 'V-am trimis un nou cod prin telefon',
                        ],

                    ],

                ],

            ],

            'messages' => [
                'invalid' => 'Codul pe care l-ați introdus este invalid.',
            ],
        ],
    ],
];