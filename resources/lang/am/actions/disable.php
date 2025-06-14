<?php

return [

    'label' => 'ያቁሙ',

    'modal' => [

        'heading' => 'የስልክ ማረጋገጫ ኮዶችን ያቁሙ',

        'description' => 'የስልክ ማረጋገጫ ኮዶችን መቀበል መቆም እንደሚፈልጉ እርግጠኛ ነዎት? ይህንን ማሰናከል ከመለያዎ ተጨማሪ የደህንነት ንብረትን ያስወግዳል።',

        'form' => [

            'code' => [

                'label' => 'ወደ ስልክዎ የላክንብዎ 6-አሃዝ ኮድ ያስገቡ',

                'validation_attribute' => 'ኮድ',

                'actions' => [

                    'resend' => [

                        'label' => 'አዲስ ኮድ ወደ ስልክዎ ይላኩ',

                        'notifications' => [

                            'resent' => [
                                'title' => 'አዲስ ኮድ ወደ ስልክዎ ላክንልዎታል',
                            ],

                        ],

                    ],

                ],

                'messages' => [

                    'invalid' => 'ያስገቡት ኮድ የማያገለግል ነው።',

                ],

            ],

        ],

        'actions' => [

            'submit' => [
                'label' => 'የስልክ ማረጋገጫ ኮዶችን ያቁሙ',
            ],

        ],

    ],

    'notifications' => [

        'disabled' => [
            'title' => 'የስልክ ማረጋገጫ ኮዶች ተሰናክለዋል',
        ],

    ],

];
