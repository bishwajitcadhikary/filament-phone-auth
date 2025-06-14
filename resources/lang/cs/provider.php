<?php

return [

    'management_schema' => [

        'actions' => [

            'label' => 'Telefonní ověřovací kódy',

            'below_content' => 'Získejte dočasný kód na vaše telefonní číslo pro ověření vaší identity při přihlášení.',

            'messages' => [
                'enabled' => 'Povoleno',
                'disabled' => 'Zakázáno',
            ],

        ],

    ],

    'login_form' => [

        'label' => 'Odeslat kód na váš telefon',

        'code' => [

            'label' => 'Zadejte 6místný kód, který jsme vám poslali na telefon',

            'validation_attribute' => 'kód',

            'actions' => [

                'resend' => [

                    'label' => 'Poslat nový kód na telefon',

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

];
