<?php

return [

    'label' => 'Quraşdırın',

    'modal' => [

        'heading' => 'Telefon doğrulama kodlarını quraşdırın',

        'description' => 'Hər dəfə daxil olduğunuzda və ya həssas əməliyyatlar yerinə yetirdiyinizdə telefon nömrənizə göndərdiyimiz 6 rəqəmli kodu daxil etməli olacaqsınız. Quraşdırmanı tamamlamaq üçün telefonunuzda 6 rəqəmli kodu yoxlayın.',

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
                'label' => 'Telefon doğrulama kodlarını aktivləşdirin',
            ],

        ],

    ],

    'notifications' => [

        'enabled' => [
            'title' => 'Telefon doğrulama kodları aktivləşdirildi',
        ],

    ],

];
