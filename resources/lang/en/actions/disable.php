<?php

return [

    'label' => 'Turn off',

    'modal' => [

        'heading' => 'Disable phone verification codes',

        'description' => 'Are you sure you want to stop receiving phone verification codes? Disabling this will remove an extra layer of security from your account.',

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
                'label' => 'Disable phone verification codes',
            ],

        ],

    ],

    'notifications' => [

        'disabled' => [
            'title' => 'Phone verification codes have been disabled',
        ],

    ],

];
