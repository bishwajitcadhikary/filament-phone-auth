<?php

return [

    'label' => 'Kikapcsolás',

    'modal' => [

        'heading' => 'Telefonos ellenőrző kódok letiltása',

        'description' => 'Biztosan le szeretné tiltani a telefonos ellenőrző kódok fogadását? Ennek letiltása eltávolít egy extra biztonsági réteget a fiókjából.',

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
                'label' => 'Telefonos ellenőrző kódok letiltása',
            ],

        ],

    ],

    'notifications' => [

        'disabled' => [
            'title' => 'A telefonos ellenőrző kódok letiltva',
        ],

    ],

];