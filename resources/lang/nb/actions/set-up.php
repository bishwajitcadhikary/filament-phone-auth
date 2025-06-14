<?php

return [

    'label' => 'Sett opp',

    'modal' => [

        'heading' => 'Oppsett av telefonverifiseringskoder',

        'description' => 'Du må skrive inn 6-sifret kode som vi sendte til din telefon for å logge inn eller utføre sensitive handlinger.',

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
                'label' => 'Aktiver telefonverifiseringskoder',
            ],

        ],

    ],

    'notifications' => [

        'enabled' => [
            'title' => 'Telefonverifiseringskoder er aktivert',
        ],

    ],

];
