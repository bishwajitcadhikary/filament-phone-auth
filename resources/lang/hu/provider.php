<?php

return [

    'management_schema' => [

        'actions' => [

            'label' => 'Telefonos ellenőrző kódok',

            'below_content' => 'Kapjon ideiglenes kódot a telefonszámára, hogy igazolja személyazonosságát bejelentkezéskor.',

            'messages' => [
                'enabled' => 'Engedélyezve',
                'disabled' => 'Letiltva',
            ],

        ],

    ],

    'login_form' => [

        'label' => 'Kód küldése a telefonjára',

        'code' => [

            'label' => 'Írja be a 6 számjegyű kódot, amelyet telefonon küldtünk',

            'validation_attribute' => 'kód',

            'actions' => [

                'resend' => [

                    'label' => 'Új kód küldése telefonon',

                    'notifications' => [

                        'resent' => [
                            'title' => 'Új kódot küldtünk telefonon',
                        ],

                    ],

                ],

            ],

            'messages' => [

                'invalid' => 'A megadott kód érvénytelen.',

            ],

        ],

    ],

];
