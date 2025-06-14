<?php

return [

    'label' => 'Vypnout',

    'modal' => [

        'heading' => 'Vypnutí telefonních ověřovacích kódů',

        'description' => 'Opravdu chcete přestat přijímat telefonní ověřovací kódy? Vypnutí této funkce odstraní z vašeho účtu další vrstvu zabezpečení.',

        'form' => [

            'code' => [

                'label' => 'Zadejte 6místný kód, který jsme vám poslali na telefon',

                'validation_attribute' => 'kód',

                'actions' => [

                    'resend' => [

                        'label' => 'Poslat nový kód na váš telefon',

                        'notifications' => [

                            'resent' => [
                                'title' => 'Poslali jsme vám nový kód na telefon',
                            ],

                        ],

                    ],

                ],

                'messages' => [

                    'invalid' => 'Zadaný kód je neplatný.',

                ],

            ],

        ],

        'actions' => [

            'submit' => [
                'label' => 'Vypnout telefonní ověřovací kódy',
            ],

        ],

    ],

    'notifications' => [

        'disabled' => [
            'title' => 'Telefonní ověřovací kódy byly vypnuty',
        ],

    ],

];
