<?php

return [

    'management_schema' => [

        'actions' => [

            'label' => 'Telefon doğrulama kodları',

            'below_content' => 'Giriş zamanı kimliyinizi doğrulamak üçün telefon nömrənizə müvəqqəti kod alın.',

            'messages' => [
                'enabled' => 'Aktivdir',
                'disabled' => 'Deaktivdir',
            ],

        ],

    ],

    'login_form' => [

        'label' => 'Telefonunuza kod göndərin',

        'code' => [

            'label' => 'Telefonla göndərdiyimiz 6 rəqəmli kodu daxil edin',

            'validation_attribute' => 'kod',

            'actions' => [

                'resend' => [

                    'label' => 'Telefonla yeni kod göndərin',

                    'notifications' => [

                        'resent' => [
                            'title' => 'Telefonla sizə yeni kod göndərdik',
                        ],

                    ],

                ],

            ],

            'messages' => [

                'invalid' => 'Daxil etdiyiniz kod yanlışdır.',

            ],

        ],

    ],

];
