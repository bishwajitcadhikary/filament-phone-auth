<?php

return [

    'management_schema' => [

        'actions' => [

            'label' => 'ტელეფონის ვერიფიკაციის კოდები',

            'below_content' => 'შესვლისას თქვენი იდენტობის დასადასტურებლად მიიღეთ დროებითი კოდი თქვენს ტელეფონის ნომერზე.',

            'messages' => [
                'enabled' => 'ჩართულია',
                'disabled' => 'გამორთულია',
            ],

        ],

    ],

    'login_form' => [

        'label' => 'კოდის გაგზავნა თქვენს ტელეფონზე',

        'code' => [

            'label' => 'შეიყვანეთ 6-ციფრიანი კოდი, რომელიც გამოგიგზავნეთ ტელეფონზე',

            'validation_attribute' => 'კოდი',

            'actions' => [

                'resend' => [

                    'label' => 'ახალი კოდის გაგზავნა ტელეფონზე',

                    'notifications' => [

                        'resent' => [
                            'title' => 'ჩვენ გამოგიგზავნეთ ახალი კოდი ტელეფონზე',
                        ],

                    ],

                ],

            ],

            'messages' => [
                'invalid' => 'შეყვანილი კოდი არასწორია.',
            ],

        ],

    ],

];
