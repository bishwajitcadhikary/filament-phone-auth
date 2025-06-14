<?php

return [

    'label' => 'አዘጋጅ',

    'modal' => [

        'heading' => 'የስልክ ማረጋገጫ ኮዶችን አዘጋጅ',

        'description' => 'በየጊዜው ሲገቡ ወይም ሚስጥራዊ ድርጊቶችን ሲፈጽሙ 6-አሃዝ ኮድ እንልካለን። ማዘጋጀቱን ለማጠናቀቅ በስልክዎ ላይ ያለውን 6-አሃዝ ኮድ ያረጋግጡ።',

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
                'label' => 'የስልክ ማረጋገጫ ኮዶችን ንቁ ያድርጉ',
            ],

        ],

    ],

    'notifications' => [

        'enabled' => [
            'title' => 'የስልክ ማረጋገጫ ኮዶች ንቁ ተደርገዋል',
        ],

    ],

];
