<?php

return [

    'label' => 'הגדר',

    'modal' => [

        'heading' => 'הגדר קודי אימות טלפון',

        'description' => 'תצטרך להזין את הקוד בן 6 ספרות שאנו שולחים למספר הטלפון שלך בכל פעם שאתה מתחבר או מבצע פעולות רגישות. בדוק את הטלפון שלך לקבלת קוד בן 6 ספרות להשלמת ההגדרה.',

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
                'label' => 'הפעל קודי אימות טלפון',
            ],

        ],

    ],

    'notifications' => [

        'enabled' => [
            'title' => 'קודי אימות טלפון הופעלו',
        ],

    ],

];
