<?php

return [

    'management_schema' => [

        'actions' => [

            'label' => 'Mã xác thực điện thoại',

            'below_content' => 'Nhận mã tạm thời trên số điện thoại của bạn để xác minh danh tính của bạn khi đăng nhập.',

            'messages' => [
                'enabled' => 'Đã bật',
                'disabled' => 'Đã tắt',
            ],

        ],

    ],

    'login_form' => [

        'label' => 'Gửi mã đến điện thoại của bạn',

        'code' => [

            'label' => 'Nhập mã 6 chữ số mà chúng tôi đã gửi đến điện thoại của bạn',

            'validation_attribute' => 'code',

            'actions' => [

                'resend' => [

                    'label' => 'Gửi mã mới đến điện thoại',

                    'notifications' => [

                        'resent' => [
                            'title' => 'Chúng tôi đã gửi cho bạn một mã mới đến điện thoại',
                        ],

                    ],

                ],

            ],

            'messages' => [
                'invalid' => 'Mã bạn đã nhập không hợp lệ.',
            ],
        ],
    ],
];
