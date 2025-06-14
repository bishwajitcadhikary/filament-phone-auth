<?php

return [

    'management_schema' => [

        'actions' => [

            'label' => 'फोन प्रमाणीकरण कोडहरू',

            'below_content' => 'लगइन गर्दा आफ्नो पहिचान प्रमाणित गर्न आफ्नो फोन नम्बरमा अस्थायी कोड प्राप्त गर्नुहोस्।',

            'messages' => [
                'enabled' => 'सक्षम गरिएको',
                'disabled' => 'अक्षम गरिएको',
            ],

        ],

    ],

    'login_form' => [

        'label' => 'तपाईंको फोनमा कोड पठाउनुहोस्',

        'code' => [

            'label' => 'हामीले तपाईंलाई फोनद्वारा पठाएको ६-अंकको कोड प्रविष्ट गर्नुहोस्',

            'validation_attribute' => 'code',

            'actions' => [

                'resend' => [

                    'label' => 'फोनद्वारा नयाँ कोड पठाउनुहोस्',

                    'notifications' => [

                        'resent' => [
                            'title' => 'हामीले तपाईंलाई फोनद्वारा नयाँ कोड पठाएका छौं',
                        ],

                    ],

                ],

            ],

            'messages' => [
                'invalid' => 'तपाईंले प्रविष्ट गर्नुभएको कोड अमान्य छ।',
            ],
        ],
    ],
];
