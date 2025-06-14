<?php

return [

    'label' => 'Bigire',

    'modal' => [

        'heading' => 'Kodên piştrastkirina telefonê neçalak bike',

        'description' => 'Tu bi rastî dixwazî wergirtina kodên piştrastkirina telefonê rawestînî? Neçalakkirina vê yekê dê qatekî din a ewlehiyê ji hesabê te rake.',

        'form' => [

            'code' => [

                'label' => 'Koda 6-reqemî ya ku me ji telefonê te re şand binivîse',

                'validation_attribute' => 'kod',

                'actions' => [

                    'resend' => [

                        'label' => 'Kodek nû ji telefonê xwe re bişîne',

                        'notifications' => [

                            'resent' => [
                                'title' => 'Me kodek nû ji telefonê te re şand',
                            ],

                        ],

                    ],

                ],

                'messages' => [

                    'invalid' => 'Koda ku te nivîsî ne derbasdar e.',

                ],

            ],

        ],

        'actions' => [

            'disable' => [
                'label' => 'Neçalak bike',
            ],

        ],

    ],

];