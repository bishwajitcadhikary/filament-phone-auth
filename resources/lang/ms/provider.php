<?php

return [

    'management_schema' => [

        'actions' => [

            'label' => 'Kod pengesahan telefon',

            'below_content' => 'Terima kod sementara pada nombor telefon anda untuk mengesahkan identiti anda semasa log masuk.',

            'messages' => [
                'enabled' => 'Diaktifkan',
                'disabled' => 'Dinyahaktifkan',
            ],

        ],

    ],

    'login_form' => [

        'label' => 'Hantar kod ke telefon anda',

        'code' => [

            'label' => 'Masukkan kod 6 digit yang kami hantar melalui telefon',

            'validation_attribute' => 'kod',

            'actions' => [

                'resend' => [

                    'label' => 'Hantar kod baru melalui telefon',

                    'notifications' => [

                        'resent' => [
                            'title' => 'Kami telah menghantar kod baru melalui telefon',
                        ],

                    ],

                ],

            ],

            'messages' => [
                'invalid' => 'Kod yang anda masukkan tidak sah.',
            ],

        ],

    ],

];
