<?php

return [

    'label' => 'כבה',

    'modal' => [

        'heading' => 'השבת קודי אימות טלפון',

        'description' => 'האם אתה בטוח שברצונך להפסיק לקבל קודי אימות טלפון? השבתת אפשרות זו תסיר שכבת אבטחה נוספת מחשבונך.',

        'form' => [

            'code' => [

                'label' => 'הזן את הקוד בן 6 ספרות ששלחנו לטלפון שלך',

                'validation_attribute' => 'קוד',

                'actions' => [

                    'resend' => [

                        'label' => 'שלח קוד חדש לטלפון שלך',

                        'notifications' => [

                            'resent' => [
                                'title' => 'שלחנו לך קוד חדש לטלפון שלך',
                            ],

                        ],

                    ],

                ],

                'messages' => [

                    'invalid' => 'הקוד שהזנת אינו חוקי.',

                ],

            ],

        ],

        'actions' => [

            'submit' => [
                'label' => 'השבת קודי אימות טלפון',
            ],

        ],

    ],

    'notifications' => [

        'disabled' => [
            'title' => 'קודי אימות טלפון הושבתו',
        ],

    ],

];