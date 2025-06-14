<?php

return [

    'management_schema' => [

        'actions' => [

            'label' => 'کدهای تأیید تلفن',

            'below_content' => 'یک کد موقت روی شماره تلفن خود دریافت کنید تا هویت خود را هنگام ورود به سیستم تأیید کنید.',

            'messages' => [
                'enabled' => 'فعال',
                'disabled' => 'غیرفعال',
            ],

        ],

    ],

    'login_form' => [

        'label' => 'ارسال کد به تلفن شما',

        'code' => [

            'label' => 'کد ۶ رقمی که از طریق تلفن برای شما ارسال کردیم را وارد کنید',

            'validation_attribute' => 'کد',

            'actions' => [

                'resend' => [

                    'label' => 'ارسال کد جدید از طریق تلفن',

                    'notifications' => [

                        'resent' => [
                            'title' => 'ما یک کد جدید از طریق تلفن برای شما ارسال کردیم',
                        ],

                    ],

                ],

            ],

            'messages' => [

                'invalid' => 'کدی که وارد کردید نامعتبر است.',

            ],

        ],

    ],

];
