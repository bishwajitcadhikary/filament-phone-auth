<?php

return [

    'management_schema' => [

        'actions' => [

            'label' => 'Telefonverifikationskoder',

            'below_content' => 'Modtag en midlertidig kode på dit telefonnummer for at bekræfte din identitet under login.',

            'messages' => [
                'enabled' => 'Aktiveret',
                'disabled' => 'Deaktiveret',
            ],

        ],

    ],

    'login_form' => [

        'label' => 'Send en kode til din telefon',

        'code' => [

            'label' => 'Indtast den 6-cifrede kode, vi sendte til dig via telefon',

            'validation_attribute' => 'kode',

            'actions' => [

                'resend' => [

                    'label' => 'Send en ny kode via telefon',

                    'notifications' => [

                        'resent' => [
                            'title' => 'Vi har sendt dig en ny kode via telefon',
                        ],

                    ],

                ],

            ],

            'messages' => [

                'invalid' => 'Koden, du indtastede, er ugyldig.',

            ],

        ],

    ],

];
