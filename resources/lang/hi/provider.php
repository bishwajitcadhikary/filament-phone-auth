<?php

return [
    'management_schema' => [
        'actions' => [
            'label' => 'फोन सत्यापन कोड',
            'below_content' => 'लॉगिन के दौरान अपनी पहचान सत्यापित करने के लिए अपने फोन नंबर पर एक अस्थायी कोड प्राप्त करें।',
            'messages' => [
                'enabled' => 'सक्षम',
                'disabled' => 'अक्षम',
            ],
        ],
    ],
    'login_form' => [
        'label' => 'अपने फोन पर कोड भेजें',
        'code' => [
            'label' => 'वह 6-अंकीय कोड दर्ज करें जो हमने आपको फोन पर भेजा है',
            'validation_attribute' => 'कोड',
            'actions' => [
                'resend' => [
                    'label' => 'फोन पर नया कोड भेजें',
                    'notifications' => [
                        'resent' => [
                            'title' => 'हमने आपको फोन पर एक नया कोड भेज दिया है',
                        ],
                    ],
                ],
            ],
            'messages' => [
                'invalid' => 'आपके द्वारा दर्ज किया गया कोड अमान्य है।',
            ],
        ],
    ],
];
