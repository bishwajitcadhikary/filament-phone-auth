<?php

return [

    'management_schema' => [

        'actions' => [

            'label' => 'Kodên piştrastkirina telefonê',

            'below_content' => 'Di dema têketinê de ji bo piştrastkirina nasnameya xwe kodek demkî li ser hejmara telefonê xwe werbigirin.',

            'messages' => [
                'enabled' => 'Çalak',
                'disabled' => 'Neçalak',
            ],

        ],

    ],

    'login_form' => [

        'label' => 'Kodekê bişîne telefonê xwe',

        'code' => [

            'label' => 'Koda 6-reqemî ya ku me bi telefonê ji we re şand binivîse',

            'validation_attribute' => 'kod',

            'actions' => [

                'resend' => [

                    'label' => 'Kodek nû bi telefonê bişîne',

                    'notifications' => [

                        'resent' => [
                            'title' => 'Me kodek nû bi telefonê ji we re şand',
                        ],

                    ],

                ],

            ],

            'messages' => [
                'invalid' => 'Koda ku we nivîsî ne derbasdar e.',
            ],

        ],

    ],

];
