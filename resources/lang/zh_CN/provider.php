<?php

return [
    'management_schema' => [
        'actions' => [
            'label' => '手机验证码',
            'below_content' => '登录时接收发送到您手机号码的临时验证码以验证身份。',
            'messages' => [
                'enabled' => '已启用',
                'disabled' => '已禁用',
            ],
        ],
    ],
    'login_form' => [
        'label' => '发送验证码到您的手机',
        'code' => [
            'label' => '请输入我们发送到您手机的6位验证码',
            'validation_attribute' => '验证码',
            'actions' => [
                'resend' => [
                    'label' => '重新发送验证码到您的手机',
                    'notifications' => [
                        'resent' => [
                            'title' => '我们已向您的手机发送新的验证码',
                        ],
                    ],
                ],
            ],
            'messages' => [
                'invalid' => '您输入的验证码无效。',
            ],
        ],
    ],
];
