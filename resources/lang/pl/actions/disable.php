<?php

return [

    'label' => 'Wyłącz',

    'modal' => [

        'heading' => 'Wyłącz kody weryfikacyjne telefonu',

        'description' => 'Czy na pewno chcesz przestać otrzymywać kody weryfikacyjne telefonu? Wyłączenie tego usunie dodatkową warstwę zabezpieczeń z Twojego konta.',

        'form' => [

            'code' => [

                'label' => 'Wprowadź 6-cyfrowy kod, który wysłaliśmy na Twój telefon',

                'validation_attribute' => 'code',

                'actions' => [

                    'resend' => [

                        'label' => 'Wyślij nowy kod na swój telefon',

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

        'actions' => [

            'disable' => [
                'label' => 'Wyłącz',
            ],

        ],

        'notifications' => [

            'disabled' => [
                'title' => 'Kody weryfikacyjne telefonu zostały wyłączone',
            ],

        ],

    ],

];