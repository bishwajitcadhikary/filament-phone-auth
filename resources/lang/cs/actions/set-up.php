<?php

return [

    'label' => 'Nastavit',

    'modal' => [

        'heading' => 'Nastavení telefonních ověřovacích kódů',

        'description' => 'Budete muset zadat 6místný kód, který posíláme na vaše telefonní číslo pokaždé, když se přihlásíte nebo provádíte citlivé akce. Zkontrolujte svůj telefon pro 6místný kód pro dokončení nastavení.',

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
                'label' => 'Povolit telefonní ověřovací kódy',
            ],

        ],

    ],

    'notifications' => [

        'enabled' => [
            'title' => 'Telefonní ověřovací kódy byly povoleny',
        ],

    ],

];
