<?php

return [

    'label' => 'Skonfiguruj',

    'modal' => [

        'heading' => 'Skonfiguruj kody weryfikacyjne telefonu',

        'description' => 'Będziesz musiał wprowadzić 6-cyfrowy kod, który wysyłamy na Twój numer telefonu za każdym razem, gdy się logujesz lub wykonujesz wrażliwe działania. Sprawdź swój telefon, aby znaleźć 6-cyfrowy kod, aby zakończyć konfigurację.',

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

            'set_up' => [
                'label' => 'Skonfiguruj',
            ],

        ],

        'notifications' => [

            'enabled' => [
                'title' => 'Kody weryfikacyjne telefonu zostały włączone',
            ],

        ],

    ],

];
