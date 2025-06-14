<?php

return [

    'label' => 'Saz bike',

    'modal' => [

        'heading' => 'Kodên piştrastkirina telefonê saz bike',

        'description' => 'Her carê ku tu têkevî an jî çalakiyên hestiyar pêk bînî, divê tu koda 6-reqemî ya ku em ji hejmara telefonê te re dişînin binivîsî. Ji bo temamkirina sazkirin, li telefonê xwe binêre ji bo kodek 6-reqemî.',

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

            'set_up' => [
                'label' => 'Saz bike',
            ],

        ],

    ],

];
