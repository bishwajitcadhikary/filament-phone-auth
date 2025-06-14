<?php

return [

    'label' => 'Set up',

    'modal' => [

        'heading' => 'Set up phone verification codes',

        'description' => 'You\'ll need to enter the 6-digit code we send to your phone number each time you sign in or perform sensitive actions. Check your phone for a 6-digit code to complete the setup.',

        'form' => [

            'code' => [

                'label' => 'Enter the 6-digit code we sent to your phone',

                'validation_attribute' => 'code',

                'actions' => [

                    'resend' => [

                        'label' => 'Send a new code to your phone',

                        'notifications' => [

                            'resent' => [
                                'title' => 'We\'ve sent you a new code to your phone',
                            ],

                        ],

                    ],

                ],

                'messages' => [

                    'invalid' => 'The code you entered is invalid.',

                ],

            ],

        ],

        'actions' => [

            'submit' => [
                'label' => 'Enable phone verification codes',
            ],

        ],

    ],

    'notifications' => [

        'enabled' => [
            'title' => 'Phone verification codes have been enabled',
        ],

    ],

];
