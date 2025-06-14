<?php

return [

    'label' => 'Deaktiver',

    'modal' => [

        'heading' => 'Deaktivering av telefonverifiseringskoder',

        'description' => 'Er du sikker på at du vil stoppe mottak av verifiseringskoder? Dette kan gjøre kontoen din mindre sikker.',

        'form' => [

            'code' => [

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

        ],

        'actions' => [

            'submit' => [
                'label' => 'Deaktiver telefonverifiseringskoder',
            ],

        ],

    ],

    'notifications' => [

        'disabled' => [
            'title' => 'Telefonverifiseringskoder er deaktivert',
        ],

    ],

];
