<?php

return [

    'label' => 'Söndürün',

    'modal' => [

        'heading' => 'Telefon doğrulama kodlarını söndürün',

        'description' => 'Telefon doğrulama kodlarını almağı dayandırmaq istədiyinizə əminsiniz? Bunu söndürmək hesabınızdan əlavə təhlükəsizlik təbəqəsini aradan qaldıracaq.',

        'form' => [

            'code' => [

                'label' => 'Telefonunuza göndərdiyimiz 6 rəqəmli kodu daxil edin',

                'validation_attribute' => 'kod',

                'actions' => [

                    'resend' => [

                        'label' => 'Telefonunuza yeni kod göndərin',

                        'notifications' => [

                            'resent' => [
                                'title' => 'Telefonunuza yeni kod göndərdik',
                            ],

                        ],

                    ],

                ],

                'messages' => [

                    'invalid' => 'Daxil etdiyiniz kod yanlışdır.',

                ],

            ],

        ],

        'actions' => [

            'submit' => [
                'label' => 'Telefon doğrulama kodlarını söndürün',
            ],

        ],

    ],

    'notifications' => [

        'disabled' => [
            'title' => 'Telefon doğrulama kodları söndürüldü',
        ],

    ],

];
