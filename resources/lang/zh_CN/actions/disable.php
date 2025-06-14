<?php

return [
    'label' => '关闭',
    'modal' => [
        'heading' => '关闭手机验证码',
        'description' => '您确定要停止接收手机验证码吗？关闭此功能将移除您账户的额外安全层。',
        'form' => [
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
        'actions' => [
            'submit' => [
                'label' => '关闭手机验证码',
            ],
        ],
    ],
    'notifications' => [
        'disabled' => [
            'title' => '手机验证码已关闭',
        ],
    ],
];
