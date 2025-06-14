<?php

return [

    'label' => 'Opsætning',

    'modal' => [

        'heading' => 'Opsæt telefonverifikationskoder',

        'description' => 'Du skal indtaste den 6-cifrede kode, vi sender til dit telefonnummer, hver gang du logger ind eller udfører følsomme handlinger. Tjek din telefon for en 6-cifret kode for at fuldføre opsætningen.',

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
                'label' => 'Aktiver telefonverifikationskoder',
            ],

        ],

    ],

    'notifications' => [

        'enabled' => [
            'title' => 'Telefonverifikationskoder er blevet aktiveret',
        ],

    ],

];