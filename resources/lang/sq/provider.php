<?php

return [

    'management_schema' => [

        'actions' => [

            'label' => 'Kodet e verifikimit të telefonit',

            'below_content' => 'Merrni një kod të përkohshëm në numrin tuaj të telefonit për të verifikuar identitetin tuaj gjatë hyrjes.',

            'messages' => [
                'enabled' => 'Aktivizuar',
                'disabled' => 'Çaktivizuar',
            ],

        ],

    ],

    'login_form' => [

        'label' => 'Dërgo një kod në telefonin tuaj',

        'code' => [

            'label' => 'Vendosni kodin 6-shifror që ju dërguam me telefon',

            'validation_attribute' => 'code',

            'actions' => [

                'resend' => [

                    'label' => 'Dërgo një kod të ri me telefon',

                    'notifications' => [

                        'resent' => [
                            'title' => 'Ju kemi dërguar një kod të ri me telefon',
                        ],

                    ],

                ],

            ],

            'messages' => [
                'invalid' => 'Kodi që keni vendosur është i pavlefshëm.',
            ],
        ],
    ],
];
