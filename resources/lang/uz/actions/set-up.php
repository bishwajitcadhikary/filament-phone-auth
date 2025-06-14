<?php

return [

    'label' => 'O\'rnatish',

    'modal' => [

        'heading' => 'Telefon tasdiqlash kodini o\'rnatish',

        'description' => 'Har safar tizimga kirganingizda yoki muhim amallarni bajarganingizda telefon raqamingizga yuboradigan 6 raqamli kodni kiritishingiz kerak bo\'ladi. O\'rnatishni yakunlash uchun telefoningizda 6 raqamli kodni tekshiring.',

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

            'set_up' => [
                'label' => 'O\'rnatish',
            ],

        ],

        'notifications' => [

            'enabled' => [
                'title' => 'Telefon tasdiqlash kodi yoqildi',
            ],

        ],

    ],

];