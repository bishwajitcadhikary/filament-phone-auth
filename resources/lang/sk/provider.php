<?php

return [

    'management_schema' => [

        'actions' => [

            'label' => 'Telefónne verifikačné kódy',

            'below_content' => 'Prijímajte dočasný kód na svoje telefónne číslo na overenie vašej identity počas prihlasovania.',

            'messages' => [
                'enabled' => 'Povolené',
                'disabled' => 'Zakázané',
            ],

        ],

    ],

    'login_form' => [

        'label' => 'Poslať kód na váš telefón',

        'code' => [

            'label' => 'Zadajte 6-miestny kód, ktorý sme vám poslali na telefón',

            'validation_attribute' => 'code',

            'actions' => [

                'resend' => [

                    'label' => 'Poslať nový kód na telefón',

                    'notifications' => [

                        'resent' => [
                            'title' => 'Poslali sme vám nový kód na telefón',
                        ],

                    ],

                ],

            ],

            'messages' => [
                'invalid' => 'Kód, ktorý ste zadali, je neplatný.',
            ],
        ],
    ],
];