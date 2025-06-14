<?php

return [

    'label' => 'Išjungti',

    'modal' => [

        'heading' => 'Telefono patvirtinimo kodų išjungimas',

        'description' => 'Ar tikrai norite nustoti gauti telefono patvirtinimo kodus? Šios funkcijos išjungimas pašalins papildomą apsaugos sluoksnį iš jūsų paskyros.',

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
                'label' => 'Išjungti telefono patvirtinimo kodus',
            ],

        ],

    ],

    'notifications' => [

        'disabled' => [
            'title' => 'Telefono patvirtinimo kodai išjungti',
        ],

    ],

];
