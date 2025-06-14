<?php

return [

    'label' => '設定',

    'modal' => [

        'heading' => '設定手機驗證碼',

        'description' => '每次登入或執行敏感操作時，您都需要輸入我們發送到您手機號碼的6位數驗證碼。請查看您的手機以獲取6位數驗證碼來完成設定。',

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

            'set_up' => [
                'label' => '設定',
            ],

        ],

        'notifications' => [

            'enabled' => [
                'title' => '手機驗證碼已啟用',
            ],

        ],

    ],

];