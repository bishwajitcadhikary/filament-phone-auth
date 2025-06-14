<?php

return [
    'management_schema' => [
        'actions' => [
            'label' => '전화 인증 코드',
            'below_content' => '로그인 시 신원을 확인하기 위해 휴대폰 번호로 임시 코드를 받습니다.',
            'messages' => [
                'enabled' => '활성화됨',
                'disabled' => '비활성화됨',
            ],
        ],
    ],
    'login_form' => [
        'label' => '휴대폰으로 코드 전송',
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
];
