<?php

return [

    'management_schema' => [

        'actions' => [

            'label' => '手機驗證碼',

            'below_content' => '在登入時，接收臨時驗證碼到您的手機號碼以驗證您的身份。',

            'messages' => [
                'enabled' => '已啟用',
                'disabled' => '已停用',
            ],

        ],

    ],

    'login_form' => [

        'label' => '發送驗證碼到您的手機',

        'code' => [

            'label' => '輸入我們發送到您手機的6位數驗證碼',

            'validation_attribute' => 'code',

            'actions' => [

                'resend' => [

                    'label' => '發送新驗證碼到手機',

                    'notifications' => [

                        'resent' => [
                            'title' => '我們已發送新驗證碼到您的手機',
                        ],

                    ],

                ],

            ],

            'messages' => [
                'invalid' => '您輸入的驗證碼無效。',
            ],
        ],
    ],
];
