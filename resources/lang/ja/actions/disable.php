<?php

return [
    'label' => '無効化',
    'modal' => [
        'heading' => '電話認証コードを無効化',
        'description' => '電話認証コードの受信を停止してもよろしいですか？無効化すると、アカウントのセキュリティ層が1つ削除されます。',
        'form' => [
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
        'actions' => [
            'submit' => [
                'label' => '電話認証コードを無効化',
            ],
        ],
    ],
    'notifications' => [
        'disabled' => [
            'title' => '電話認証コードが無効化されました',
        ],
    ],
];
