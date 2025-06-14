<?php

return [

    'label' => 'Beállítás',

    'modal' => [

        'heading' => 'Telefonos ellenőrző kódok beállítása',

        'description' => 'Minden bejelentkezéskor vagy érzékeny műveletek végrehajtásakor meg kell adnia a 6 számjegyű kódot, amelyet a telefonszámára küldünk. A beállítás befejezéséhez ellenőrizze telefonját a 6 számjegyű kódért.',

        'form' => [

            'code' => [

                'label' => 'Írja be a 6 számjegyű kódot, amelyet a telefonjára küldtünk',

                'validation_attribute' => 'kód',

                'actions' => [

                    'resend' => [

                        'label' => 'Új kód küldése a telefonjára',

                        'notifications' => [

                            'resent' => [
                                'title' => 'Új kódot küldtünk a telefonjára',
                            ],

                        ],

                    ],

                ],

                'messages' => [

                    'invalid' => 'A megadott kód érvénytelen.',

                ],

            ],

        ],

        'actions' => [

            'submit' => [
                'label' => 'Telefonos ellenőrző kódok engedélyezése',
            ],

        ],

    ],

    'notifications' => [

        'enabled' => [
            'title' => 'A telefonos ellenőrző kódok engedélyezve',
        ],

    ],

];
