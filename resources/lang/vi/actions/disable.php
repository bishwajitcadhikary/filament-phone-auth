<?php

return [

    'label' => 'Tắt',

    'modal' => [

        'heading' => 'Tắt mã xác thực điện thoại',

        'description' => 'Bạn có chắc chắn muốn ngừng nhận mã xác thực điện thoại không? Việc tắt tính năng này sẽ loại bỏ một lớp bảo mật bổ sung khỏi tài khoản của bạn.',

        'form' => [

            'code' => [

                'label' => 'Nhập mã 6 chữ số mà chúng tôi đã gửi đến điện thoại của bạn',

                'validation_attribute' => 'code',

                'actions' => [

                    'resend' => [

                        'label' => 'Gửi mã mới đến điện thoại của bạn',

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

        'actions' => [

            'disable' => [
                'label' => 'Tắt',
            ],

        ],

        'notifications' => [

            'disabled' => [
                'title' => 'Mã xác thực điện thoại đã bị tắt',
            ],

        ],

    ],

];
