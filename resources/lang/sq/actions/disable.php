<?php

return [

    'label' => 'Çaktivizo',

    'modal' => [

        'heading' => 'Çaktivizo kodet e verifikimit të telefonit',

        'description' => 'A jeni të sigurt që dëshironi të ndaloni marrjen e kodeve të verifikimit të telefonit? Çaktivizimi i kësaj do të heqë një shtresë shtesë sigurie nga llogaria juaj.',

        'form' => [

            'code' => [

                'label' => 'Vendosni kodin 6-shifror që dërguam në telefonin tuaj',

                'validation_attribute' => 'code',

                'actions' => [

                    'resend' => [

                        'label' => 'Dërgo një kod të ri në telefonin tuaj',

                        'notifications' => [

                            'resent' => [
                                'title' => 'Ju kemi dërguar një kod të ri në telefonin tuaj',
                            ],

                        ],

                    ],

                ],

                'messages' => [

                    'invalid' => 'Kodi që keni vendosur është i pavlefshëm.',

                ],

            ],

        ],

        'actions' => [

            'disable' => [
                'label' => 'Çaktivizo',
            ],

        ],

        'notifications' => [

            'disabled' => [
                'title' => 'Kodet e verifikimit të telefonit janë çaktivizuar',
            ],

        ],

    ],

];
