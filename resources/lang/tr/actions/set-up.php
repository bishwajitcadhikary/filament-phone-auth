<?php

return [
    'label' => 'Kur',
    'modal' => [
        'heading' => 'Telefon doğrulama kodlarını kur',
        'description' => 'Her giriş yaptığınızda veya hassas işlemler gerçekleştirdiğinizde telefon numaranıza gönderdiğimiz 6 haneli kodu girmeniz gerekecek. Kurulumu tamamlamak için telefonunuzda 6 haneli bir kod kontrol edin.',
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
                'label' => 'Telefon doğrulama kodlarını etkinleştir',
            ],
        ],
    ],
    'notifications' => [
        'enabled' => [
            'title' => 'Telefon doğrulama kodları etkinleştirildi',
        ],
    ],
];
