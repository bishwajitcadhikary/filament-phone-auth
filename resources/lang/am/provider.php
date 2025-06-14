<?php

return [

    'management_schema' => [

        'actions' => [

            'label' => 'የስልክ ማረጋገጫ ኮዶች',

            'below_content' => 'በመግቢያ ላይ ራስዎን ለማረጋገጥ በስልክ ቁጥርዎ ላይ ጊዜያዊ ኮድ ይቀበሉ።',

            'messages' => [
                'enabled' => 'ንቁ',
                'disabled' => 'የተሰናከለ',
            ],

        ],

    ],

    'login_form' => [

        'label' => 'ኮድ ወደ ስልክዎ ይላኩ',

        'code' => [

            'label' => 'በስልክ በኩል የላክንብዎ 6-አሃዝ ኮድ ያስገቡ',

            'validation_attribute' => 'ኮድ',

            'actions' => [

                'resend' => [

                    'label' => 'አዲስ ኮድ በስልክ በኩል ይላኩ',

                    'notifications' => [

                        'resent' => [
                            'title' => 'አዲስ ኮድ በስልክ በኩል ላክንልዎታል',
                        ],

                    ],

                ],

            ],

            'messages' => [

                'invalid' => 'ያስገቡት ኮድ የማያገለግል ነው።',

            ],

        ],

    ],

];
