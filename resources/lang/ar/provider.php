<?php

return [
    'management_schema' => [
        'actions' => [
            'label' => 'رموز التحقق عبر الهاتف',
            'below_content' => 'استلم رمزاً مؤقتاً على رقم هاتفك للتحقق من هويتك أثناء تسجيل الدخول.',
            'messages' => [
                'enabled' => 'مفعل',
                'disabled' => 'معطل',
            ],
        ],
    ],
    'login_form' => [
        'label' => 'إرسال رمز إلى هاتفك',
        'code' => [
            'label' => 'أدخل الرمز المكون من 6 أرقام الذي أرسلناه إليك عبر الهاتف',
            'validation_attribute' => 'الرمز',
            'actions' => [
                'resend' => [
                    'label' => 'إرسال رمز جديد عبر الهاتف',
                    'notifications' => [
                        'resent' => [
                            'title' => 'لقد أرسلنا لك رمزاً جديداً عبر الهاتف',
                        ],
                    ],
                ],
            ],
            'messages' => [
                'invalid' => 'الرمز الذي أدخلته غير صالح.',
            ],
        ],
    ],
];
