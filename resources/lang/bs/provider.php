<?php

return [

    'management_schema' => [

        'label' => 'Telefonski verifikacijski kodovi',

        'below_content' => 'Dobijte privremeni kod za verifikaciju identiteta.',

        'messages' => [

            'enabled' => [
                'title' => 'Telefonski verifikacijski kodovi su omogućeni',
            ],

            'disabled' => [
                'title' => 'Telefonski verifikacijski kodovi su onemogućeni',
            ],

        ],

    ],

    'login_form' => [

        'label' => 'Unesite 6-cifreni kod koji smo vam poslali na telefon',

        'validation_attribute' => 'kod',

        'actions' => [

            'resend' => [

                'label' => 'Pošalji novi kod na tvoj telefon',

                'notifications' => [
                    'resent' => [
                        'title' => 'Poslali smo vam novi kod na telefon',
                    ],
                ],

            ],

        ],

        'messages' => [

            'invalid' => 'Uneseni kod nije validan.',

        ],

    ],

];
