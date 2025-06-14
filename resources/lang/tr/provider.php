<?php

return [

    'management_schema' => [

        'actions' => [

            'label' => 'Telefon doğrulama kodu',

            'below_content' => 'Giriş yaparken kimliğinizi doğrulamak için telefonunuza geçici bir kod alın.',

            'messages' => [
                'enabled' => 'Etkin',
                'disabled' => 'Devre dışı',
            ],

        ],

    ],

    'login_form' => [

        'label' => 'Telefonunuza kod gönderin',

        'code' => [

            'label' => 'Telefonunuza gönderdiğimiz 6 haneli kodu girin',

            'validation_attribute' => 'code',

            'actions' => [

                'resend' => [

                    'label' => 'Telefonunuza yeni kod gönderin',

                    'notifications' => [

                        'resent' => [
                            'title' => 'Telefonunuza yeni bir kod gönderdik',
                        ],

                    ],

                ],

            ],

            'messages' => [
                'invalid' => 'Girdiğiniz kod geçerli değil.',
            ],
        ],
    ],
];
