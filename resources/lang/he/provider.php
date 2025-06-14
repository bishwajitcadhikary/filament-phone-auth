<?php

return [

    'management_schema' => [

        'actions' => [

            'label' => 'קודי אימות טלפון',

            'below_content' => 'קבל קוד זמני למספר הטלפון שלך כדי לאמת את זהותך בעת התחברות.',

            'messages' => [
                'enabled' => 'מופעל',
                'disabled' => 'מושבת',
            ],

        ],

    ],

    'login_form' => [

        'label' => 'שלח קוד לטלפון שלך',

        'code' => [

            'label' => 'הזן את הקוד בן 6 ספרות ששלחנו לך בטלפון',

            'validation_attribute' => 'קוד',

            'actions' => [

                'resend' => [

                    'label' => 'שלח קוד חדש בטלפון',

                    'notifications' => [

                        'resent' => [
                            'title' => 'שלחנו לך קוד חדש בטלפון',
                        ],

                    ],

                ],

            ],

            'messages' => [

                'invalid' => 'הקוד שהזנת אינו חוקי.',

            ],

        ],

    ],

];
