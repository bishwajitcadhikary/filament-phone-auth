<?php

return [
    'label' => 'Devre Dışı Bırak',
    'modal' => [
        'heading' => 'Telefon doğrulama kodlarını devre dışı bırak',
        'description' => 'Telefon doğrulama kodlarını almayı durdurmak istediğinizden emin misiniz? Devre dışı bırakmak, hesabınızdan ek bir güvenlik katmanını kaldıracaktır.',
        'form' => [
            'code' => [
                'label' => 'Telefonunuza gönderdiğimiz 6 haneli kodu girin',
                'validation_attribute' => 'kod',
                'actions' => [
                    'resend' => [
                        'label' => 'Telefonunuza yeni bir kod gönder',
                        'notifications' => [
                            'resent' => [
                                'title' => 'Telefonunuza yeni bir kod gönderdik',
                            ],
                        ],
                    ],
                ],
                'messages' => [
                    'invalid' => 'Girdiğiniz kod geçersiz.',
                ],
            ],
        ],
        'actions' => [
            'submit' => [
                'label' => 'Telefon doğrulama kodlarını devre dışı bırak',
            ],
        ],
    ],
    'notifications' => [
        'disabled' => [
            'title' => 'Telefon doğrulama kodları devre dışı bırakıldı',
        ],
    ],
];
