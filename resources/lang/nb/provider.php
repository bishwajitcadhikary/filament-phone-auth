<?php

return [

    'management_schema' => [

        'label' => 'Telefonverifiseringskoder',

        'below_content' => 'Få en midlertidig kode for å verifisere din identitet.',

        'messages' => [

            'enabled' => [
                'title' => 'Telefonverifiseringskoder er aktivert',
            ],

            'disabled' => [
                'title' => 'Telefonverifiseringskoder er deaktivert',
            ],

        ],

    ],

    'login_form' => [

        'label' => 'Skriv inn 6-sifret kode som vi sendte til din telefon',

        'validation_attribute' => 'kode',

        'actions' => [

            'resend' => [

                'label' => 'Send ny kode til din telefon',

                'notifications' => [
                    'resent' => [
                        'title' => 'Vi har sendt en ny kode til din telefon',
                    ],
                ],

            ],

        ],

        'messages' => [

            'invalid' => 'Koden du skrev inn er ugyldig.',

        ],

    ],

];
