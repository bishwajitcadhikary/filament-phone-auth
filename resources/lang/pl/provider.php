<?php

return [

    'management_schema' => [

        'actions' => [

            'label' => 'Kody weryfikacyjne telefonu',

            'below_content' => 'Otrzymuj tymczasowy kod na swój numer telefonu, aby zweryfikować swoją tożsamość podczas logowania.',

            'messages' => [
                'enabled' => 'Włączone',
                'disabled' => 'Wyłączone',
            ],

        ],

    ],

    'login_form' => [

        'label' => 'Wyślij kod na swój telefon',

        'code' => [

            'label' => 'Wprowadź 6-cyfrowy kod, który wysłaliśmy na Twój telefon',

            'validation_attribute' => 'code',

            'actions' => [

                'resend' => [

                    'label' => 'Wyślij nowy kod na telefon',

                    'notifications' => [

                        'resent' => [
                            'title' => 'Wysłaliśmy nowy kod na Twój telefon',
                        ],

                    ],

                ],

            ],

            'messages' => [
                'invalid' => 'Wprowadzony kod jest nieprawidłowy.',
            ],
        ],
    ],
];
