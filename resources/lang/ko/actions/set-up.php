<?php

return [
    'label' => '설정',
    'modal' => [
        'heading' => '전화 인증 코드 설정',
        'description' => '로그인하거나 민감한 작업을 수행할 때마다 휴대폰 번호로 전송되는 6자리 코드를 입력해야 합니다. 설정을 완료하려면 휴대폰에서 6자리 코드를 확인하세요.',
        'form' => [
            'code' => [
                'label' => '휴대폰으로 전송된 6자리 코드를 입력하세요',
                'validation_attribute' => '코드',
                'actions' => [
                    'resend' => [
                        'label' => '새 코드를 휴대폰으로 전송',
                        'notifications' => [
                            'resent' => [
                                'title' => '새 코드를 휴대폰으로 전송했습니다',
                            ],
                        ],
                    ],
                ],
                'messages' => [
                    'invalid' => '입력하신 코드가 유효하지 않습니다.',
                ],
            ],
        ],
        'actions' => [
            'submit' => [
                'label' => '전화 인증 코드 활성화',
            ],
        ],
    ],
    'notifications' => [
        'enabled' => [
            'title' => '전화 인증 코드가 활성화되었습니다',
        ],
    ],
];
