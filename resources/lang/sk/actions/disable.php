<?php

return [

    'label' => 'Vypnúť',

    'modal' => [

        'heading' => 'Zakázať telefónne verifikačné kódy',

        'description' => 'Ste si istí, že chcete prestať prijímať telefónne verifikačné kódy? Zakázanie odstráni dodatočnú vrstvu zabezpečenia z vášho účtu.',

        'form' => [

            'code' => [

                'label' => 'Zadajte 6-miestny kód, ktorý sme poslali na váš telefón',

                'validation_attribute' => 'code',

                'actions' => [

                    'resend' => [

                        'label' => 'Poslať nový kód na váš telefón',

                        'notifications' => [

                            'resent' => [
                                'title' => 'Poslali sme vám nový kód na váš telefón',
                            ],

                        ],

                    ],

                ],

                'messages' => [

                    'invalid' => 'Kód, ktorý ste zadali, je neplatný.',

                ],

            ],

        ],

        'actions' => [

            'disable' => [
                'label' => 'Zakázať',
            ],

        ],

        'notifications' => [

            'disabled' => [
                'title' => 'Telefónne verifikačné kódy boli zakázané',
            ],

        ],

    ],

];
