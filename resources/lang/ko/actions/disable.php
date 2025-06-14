<?php

return [
    'label' => '비활성화',
    'modal' => [
        'heading' => '전화 인증 코드 비활성화',
        'description' => '전화 인증 코드 수신을 중단하시겠습니까? 비활성화하면 계정의 추가 보안 계층이 제거됩니다.',
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
                'label' => '전화 인증 코드 비활성화',
            ],
        ],
    ],
    'notifications' => [
        'disabled' => [
            'title' => '전화 인증 코드가 비활성화되었습니다',
        ],
    ],
];
