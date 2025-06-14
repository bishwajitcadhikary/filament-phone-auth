<?php

return [

    'label' => 'Nastaviť',

    'modal' => [

        'heading' => 'Nastaviť telefónne verifikačné kódy',

        'description' => 'Budete musieť zadať 6-miestny kód, ktorý pošleme na vaše telefónne číslo zakaždým, keď sa prihlásite alebo vykonáte citlivé akcie. Skontrolujte svoj telefón pre 6-miestny kód na dokončenie nastavenia.',

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

            'set_up' => [
                'label' => 'Nastaviť',
            ],

        ],

        'notifications' => [

            'enabled' => [
                'title' => 'Telefónne verifikačné kódy boli povolené',
            ],

        ],

    ],

];
