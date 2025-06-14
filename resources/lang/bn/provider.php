<?php

return [

    'management_schema' => [

        'actions' => [

            'label' => 'ফোন যাচাইকরণ কোড',

            'below_content' => 'লগইন করার সময় আপনার পরিচয় যাচাই করার জন্য আপনার ফোন নম্বরে একটি অস্থায়ী কোড পান।',

            'messages' => [
                'enabled' => 'সক্রিয়',
                'disabled' => 'নিষ্ক্রিয়',
            ],

        ],

    ],

    'login_form' => [

        'label' => 'আপনার ফোনে একটি কোড পাঠান',

        'code' => [

            'label' => 'আমরা আপনার ফোনে পাঠানো 6-অঙ্কের কোডটি লিখুন',

            'validation_attribute' => 'কোড',

            'actions' => [

                'resend' => [

                    'label' => 'ফোনে একটি নতুন কোড পাঠান',

                    'notifications' => [

                        'resent' => [
                            'title' => 'আমরা আপনার ফোনে একটি নতুন কোড পাঠিয়েছি',
                        ],

                    ],

                ],

            ],

            'messages' => [

                'invalid' => 'আপনার দেওয়া কোডটি অবৈধ।',

            ],

        ],

    ],

];
