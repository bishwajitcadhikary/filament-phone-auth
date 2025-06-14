<?php

return [

    'label' => 'Konfiguro',

    'modal' => [

        'heading' => 'Konfiguro kodet e verifikimit të telefonit',

        'description' => 'Do t\'ju duhet të vendosni kodin 6-shifror që dërgojmë në numrin tuaj të telefonit çdo herë që hyni ose kryeni veprime të ndjeshme. Kontrolloni telefonin tuaj për një kod 6-shifror për të përfunduar konfigurimin.',

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

            'set_up' => [
                'label' => 'Konfiguro',
            ],

        ],

        'notifications' => [

            'enabled' => [
                'title' => 'Kodet e verifikimit të telefonit janë aktivizuar',
            ],

        ],

    ],

];
