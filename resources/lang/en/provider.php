<?php

return [

    'management_schema' => [

        'actions' => [

            'label' => 'Phone verification codes',

            'below_content' => 'Receive a temporary code on your phone number to verify your identity during login.',

            'messages' => [
                'enabled' => 'Enabled',
                'disabled' => 'Disabled',
            ],

        ],

    ],

    'login_form' => [

        'label' => 'Send a code to your phone',

        'code' => [

            'label' => 'Enter the 6-digit code we sent you by phone',

            'validation_attribute' => 'code',

            'actions' => [

                'resend' => [

                    'label' => 'Send a new code by phone',

                    'notifications' => [

                        'resent' => [
                            'title' => 'We\'ve sent you a new code by phone',
                        ],

                    ],

                ],

            ],

            'messages' => [

                'invalid' => 'The code you entered is invalid.',

            ],

        ],

    ],

];
