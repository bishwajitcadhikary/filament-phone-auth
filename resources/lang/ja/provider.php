<?php

return [
    'management_schema' => [
        'actions' => [
            'label' => '電話認証コード',
            'below_content' => 'ログイン時に身元を確認するため、お電話番号に一時的なコードが送信されます。',
            'messages' => [
                'enabled' => '有効',
                'disabled' => '無効',
            ],
        ],
    ],
    'login_form' => [
        'label' => '電話にコードを送信',
        'code' => [
            'label' => 'お電話に送信した6桁のコードを入力してください',
            'validation_attribute' => 'コード',
            'actions' => [
                'resend' => [
                    'label' => '新しいコードを電話に送信',
                    'notifications' => [
                        'resent' => [
                            'title' => '新しいコードを電話に送信しました',
                        ],
                    ],
                ],
            ],
            'messages' => [
                'invalid' => '入力されたコードは無効です。',
            ],
        ],
    ],
];
