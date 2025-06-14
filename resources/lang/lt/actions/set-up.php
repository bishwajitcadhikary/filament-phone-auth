<?php

return [

    'label' => 'Nustatyti',

    'modal' => [

        'heading' => 'Telefono patvirtinimo kodų nustatymas',

        'description' => 'Turite įvesti 6 skaitmenų kodą, kurį išsiuntėme į jūsų telefoną, kad galėtumėte prisijungti arba atlikti jautrias operacijas.',

        'form' => [

            'code' => [

                'label' => 'Įveskite 6 skaitmenų kodą, kurį išsiuntėme į jūsų telefoną',

                'validation_attribute' => 'kodas',

                'actions' => [

                    'resend' => [

                        'label' => 'Siųsti naują kodą į jūsų telefoną',

                        'notifications' => [

                            'resent' => [
                                'title' => 'Išsiuntėme naują kodą į jūsų telefoną',
                            ],

                        ],

                    ],

                ],

                'messages' => [

                    'invalid' => 'Įvestas kodas negalioja.',

                ],

            ],

        ],

        'actions' => [

            'submit' => [
                'label' => 'Įjungti telefono patvirtinimo kodus',
            ],

        ],

    ],

    'notifications' => [

        'enabled' => [
            'title' => 'Telefono patvirtinimo kodai įjungti',
        ],

    ],

];
