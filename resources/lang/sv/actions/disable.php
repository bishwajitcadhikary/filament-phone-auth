<?php

return [

    'label' => 'Stäng av',

    'modal' => [

        'heading' => 'Inaktivera telefonverifieringskoder',

        'description' => 'Är du säker på att du vill sluta ta emot telefonverifieringskoder? Att inaktivera detta tar bort ett extra säkerhetslager från ditt konto.',

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

            'disable' => [
                'label' => 'Inaktivera',
            ],

        ],

        'notifications' => [

            'disabled' => [
                'title' => 'Telefonverifieringskoder har inaktiverats',
            ],

        ],

    ],

];
