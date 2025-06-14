<?php

return [

    'management_schema' => [

        'actions' => [

            'label' => 'Telefon tasdiqlash kodi',

            'below_content' => 'Kirish paytida shaxsingizni tasdiqlash uchun telefon raqamingizga vaqtinchalik kod oling.',

            'messages' => [
                'enabled' => 'Yoqilgan',
                'disabled' => 'O\'chirilgan',
            ],

        ],

    ],

    'login_form' => [

        'label' => 'Telefoningizga kod yuboring',

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
];