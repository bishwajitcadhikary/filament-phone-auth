<?php

return [

    'label' => 'Slå fra',

    'modal' => [

        'heading' => 'Deaktiver telefonverifikationskoder',

        'description' => 'Er du sikker på, at du vil stoppe med at modtage telefonverifikationskoder? Deaktivering af dette vil fjerne et ekstra sikkerhedslag fra din konto.',

        'form' => [

            'code' => [

                'label' => 'Indtast den 6-cifrede kode, vi sendte til din telefon',

                'validation_attribute' => 'kode',

                'actions' => [

                    'resend' => [

                        'label' => 'Send en ny kode til din telefon',

                        'notifications' => [

                            'resent' => [
                                'title' => 'Vi har sendt dig en ny kode til din telefon',
                            ],

                        ],

                    ],

                ],

                'messages' => [

                    'invalid' => 'Koden, du indtastede, er ugyldig.',

                ],

            ],

        ],

        'actions' => [

            'submit' => [
                'label' => 'Deaktiver telefonverifikationskoder',
            ],

        ],

    ],

    'notifications' => [

        'disabled' => [
            'title' => 'Telefonverifikationskoder er blevet deaktiveret',
        ],

    ],

];
