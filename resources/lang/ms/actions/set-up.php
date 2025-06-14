<?php

return [

    'label' => 'Sediakan',

    'modal' => [

        'heading' => 'Sediakan kod pengesahan telefon',

        'description' => 'Anda perlu memasukkan kod 6 digit yang kami hantar ke nombor telefon anda setiap kali anda log masuk atau melakukan tindakan sensitif. Semak telefon anda untuk kod 6 digit untuk melengkapkan persediaan.',

        'form' => [

            'code' => [

                'label' => 'Masukkan kod 6 digit yang kami hantar ke telefon anda',

                'validation_attribute' => 'kod',

                'actions' => [

                    'resend' => [

                        'label' => 'Hantar kod baru ke telefon anda',

                        'notifications' => [

                            'resent' => [
                                'title' => 'Kami telah menghantar kod baru ke telefon anda',
                            ],

                        ],

                    ],

                ],

                'messages' => [

                    'invalid' => 'Kod yang anda masukkan tidak sah.',

                ],

            ],

        ],

        'actions' => [

            'set_up' => [
                'label' => 'Sediakan',
            ],

        ],

    ],

];
