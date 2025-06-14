<?php

return [

    'management_schema' => [

        'actions' => [

            'label' => 'Telefonverifieringskoder',

            'below_content' => 'Ta emot en tillfällig kod på ditt telefonnummer för att verifiera din identitet vid inloggning.',

            'messages' => [
                'enabled' => 'Aktiverad',
                'disabled' => 'Inaktiverad',
            ],

        ],

    ],

    'login_form' => [

        'label' => 'Skicka en kod till din telefon',

        'code' => [

            'label' => 'Ange den 6-siffriga koden vi skickade till dig via telefon',

            'validation_attribute' => 'code',

            'actions' => [

                'resend' => [

                    'label' => 'Skicka en ny kod via telefon',

                    'notifications' => [

                        'resent' => [
                            'title' => 'Vi har skickat dig en ny kod via telefon',
                        ],

                    ],

                ],

            ],

            'messages' => [
                'invalid' => 'Koden du angav är ogiltig.',
            ],
        ],
    ],
];