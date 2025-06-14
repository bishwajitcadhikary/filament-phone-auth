<?php

return [

    'label' => 'Konfigurera',

    'modal' => [

        'heading' => 'Konfigurera telefonverifieringskoder',

        'description' => 'Du måste ange den 6-siffriga koden vi skickar till ditt telefonnummer varje gång du loggar in eller utför känsliga åtgärder. Kontrollera din telefon för en 6-siffrig kod för att slutföra konfigurationen.',

        'form' => [

            'code' => [

                'label' => 'Ange den 6-siffriga koden vi skickade till din telefon',

                'validation_attribute' => 'code',

                'actions' => [

                    'resend' => [

                        'label' => 'Skicka en ny kod till din telefon',

                        'notifications' => [

                            'resent' => [
                                'title' => 'Vi har skickat dig en ny kod till din telefon',
                            ],

                        ],

                    ],

                ],

                'messages' => [

                    'invalid' => 'Koden du angav är ogiltig.',

                ],

            ],

        ],

        'actions' => [

            'set_up' => [
                'label' => 'Konfigurera',
            ],

        ],

        'notifications' => [

            'enabled' => [
                'title' => 'Telefonverifieringskoder har aktiverats',
            ],

        ],

    ],

];