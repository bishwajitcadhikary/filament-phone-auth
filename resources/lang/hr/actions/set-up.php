<?php

return [

    'label' => 'Postavi',

    'modal' => [

        'heading' => 'Postavljanje telefonskih verifikacijskih kodova',

        'description' => 'Morate unijeti 6-znamenkasti kod koji smo vam poslali na telefon da biste se prijavili ili izvršili osjetljive radnje.',

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
                'label' => 'Omogući telefonske verifikacijske kodove',
            ],

        ],

    ],

    'notifications' => [

        'enabled' => [
            'title' => 'Telefonski verifikacijski kodovi su omogućeni',
        ],

    ],

];
