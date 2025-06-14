<?php

return [

    'management_schema' => [

        'label' => 'Telefono patvirtinimo kodai',

        'below_content' => 'Gaukite laikiną kodą savo tapatybei patvirtinti.',

        'messages' => [

            'enabled' => [
                'title' => 'Telefono patvirtinimo kodai įjungti',
            ],

            'disabled' => [
                'title' => 'Telefono patvirtinimo kodai išjungti',
            ],

        ],

    ],

    'login_form' => [

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

];
