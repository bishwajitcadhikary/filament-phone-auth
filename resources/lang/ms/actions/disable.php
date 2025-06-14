<?php

return [

    'label' => 'Matikan',

    'modal' => [

        'heading' => 'Nyahaktifkan kod pengesahan telefon',

        'description' => 'Adakah anda pasti mahu berhenti menerima kod pengesahan telefon? Menyahaktifkan ini akan menghapuskan lapisan keselamatan tambahan daripada akaun anda.',

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

            'disable' => [
                'label' => 'Nyahaktifkan',
            ],

        ],

    ],

];
