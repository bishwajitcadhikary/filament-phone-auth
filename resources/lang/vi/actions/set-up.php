<?php

return [

    'label' => 'Thiết lập',

    'modal' => [

        'heading' => 'Thiết lập mã xác thực điện thoại',

        'description' => 'Bạn sẽ cần nhập mã 6 chữ số mà chúng tôi gửi đến số điện thoại của bạn mỗi khi bạn đăng nhập hoặc thực hiện các hành động nhạy cảm. Kiểm tra điện thoại của bạn để lấy mã 6 chữ số để hoàn tất thiết lập.',

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

            'set_up' => [
                'label' => 'Thiết lập',
            ],

        ],

        'notifications' => [

            'enabled' => [
                'title' => 'Mã xác thực điện thoại đã được bật',
            ],

        ],

    ],

];