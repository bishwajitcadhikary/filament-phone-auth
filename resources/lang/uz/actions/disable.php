<?php

return [

    'label' => 'O\'chirish',

    'modal' => [

        'heading' => 'Telefon tasdiqlash kodini o\'chirish',

        'description' => 'Telefon tasdiqlash kodlarini olishni to\'xtatishni xohlaysizmi? Buni o\'chirish hisobingizdan qo\'shimcha xavfsizlik qatlamini olib tashlaydi.',

        'form' => [

            'code' => [

                'label' => 'Telefoningizga yuborilgan 6 raqamli kodni kiriting',

                'validation_attribute' => 'code',

                'actions' => [

                    'resend' => [

                        'label' => 'Telefoningizga yangi kod yuboring',

                        'notifications' => [

                            'resent' => [
                                'title' => 'Telefoningizga yangi kod yubordik',
                            ],

                        ],

                    ],

                ],

                'messages' => [

                    'invalid' => 'Siz kiritgan kod noto\'g\'ri.',

                ],

            ],

        ],

        'actions' => [

            'disable' => [
                'label' => 'O\'chirish',
            ],

        ],

        'notifications' => [

            'disabled' => [
                'title' => 'Telefon tasdiqlash kodi o\'chirildi',
            ],

        ],

    ],

];
