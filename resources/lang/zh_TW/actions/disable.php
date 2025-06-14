<?php

return [

    'label' => '停用',

    'modal' => [

        'heading' => '停用手機驗證碼',

        'description' => '您確定要停止接收手機驗證碼嗎？停用此功能將從您的帳戶中移除額外的安全層。',

        'form' => [

            'code' => [

                'label' => '輸入我們發送到您手機的6位數驗證碼',

                'validation_attribute' => 'code',

                'actions' => [

                    'resend' => [

                        'label' => '發送新驗證碼到您的手機',

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

        'actions' => [

            'disable' => [
                'label' => '停用',
            ],

        ],

        'notifications' => [

            'disabled' => [
                'title' => '手機驗證碼已停用',
            ],

        ],

    ],

];