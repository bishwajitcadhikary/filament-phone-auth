<?php

return [

    'label' => 'Onemogući',

    'modal' => [

        'heading' => 'Onemogućavanje telefonskih verifikacijskih kodova',

        'description' => 'Jeste li sigurni da želite prestati primati telefonske verifikacijske kodove? Onemogućavanje ove funkcije uklonit će dodatni sloj sigurnosti s vašeg računa.',

        'form' => [

            'code' => [

                'label' => 'Unesite 6-znamenkasti kod koji smo vam poslali na telefon',

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

                    'invalid' => 'Uneseni kod nije valjan.',

                ],

            ],

        ],

        'actions' => [

            'submit' => [
                'label' => 'Onemogući telefonske verifikacijske kodove',
            ],

        ],

    ],

    'notifications' => [

        'disabled' => [
            'title' => 'Telefonski verifikacijski kodovi su onemogućeni',
        ],

    ],

];
