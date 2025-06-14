<?php

return [

    'label' => 'सेटअप गर्नुहोस्',

    'modal' => [

        'heading' => 'फोन प्रमाणीकरण कोडहरू सेटअप गर्नुहोस्',

        'description' => 'तपाईंले हरेक पटक साइन इन गर्दा वा संवेदनशील कार्यहरू गर्दा हामीले तपाईंको फोन नम्बरमा पठाउने ६-अंकको कोड प्रविष्ट गर्नु पर्नेछ। सेटअप पूरा गर्न तपाईंको फोनमा ६-अंकको कोड जाँच गर्नुहोस्।',

        'form' => [

            'code' => [

                'label' => 'हामीले तपाईंको फोनमा पठाएको ६-अंकको कोड प्रविष्ट गर्नुहोस्',

                'validation_attribute' => 'code',

                'actions' => [

                    'resend' => [

                        'label' => 'तपाईंको फोनमा नयाँ कोड पठाउनुहोस्',

                        'notifications' => [

                            'resent' => [
                                'title' => 'हामीले तपाईंको फोनमा नयाँ कोड पठाएका छौं',
                            ],

                        ],

                    ],

                ],

                'messages' => [

                    'invalid' => 'तपाईंले प्रविष्ट गर्नुभएको कोड अमान्य छ।',

                ],

            ],

        ],

        'actions' => [

            'set_up' => [
                'label' => 'सेटअप गर्नुहोस्',
            ],

        ],

        'notifications' => [

            'enabled' => [
                'title' => 'फोन प्रमाणीकरण कोडहरू सक्षम गरिएको छ',
            ],

        ],

    ],

];
