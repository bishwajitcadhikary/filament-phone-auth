<?php

return [

    'label' => 'Zima',

    'modal' => [

        'heading' => 'Zima msimbo wa uthibitishaji wa simu',

        'description' => 'Je, una uhakika unataka kuacha kupokea msimbo wa uthibitishaji wa simu? Kuzima hii kutaondoa safu ya ziada ya usalama kutoka kwa akaunti yako.',

        'form' => [

            'code' => [

                'label' => 'Ingiza msimbo wa tarakimu 6 tuliotuma kwenye simu yako',

                'validation_attribute' => 'code',

                'actions' => [

                    'resend' => [

                        'label' => 'Tuma msimbo mpya kwenye simu yako',

                        'notifications' => [

                            'resent' => [
                                'title' => 'Tumekutumia msimbo mpya kwenye simu yako',
                            ],

                        ],

                    ],

                ],

                'messages' => [

                    'invalid' => 'Msimbo ulioingiza si sahihi.',

                ],

            ],

        ],

        'actions' => [

            'disable' => [
                'label' => 'Zima',
            ],

        ],

        'notifications' => [

            'disabled' => [
                'title' => 'Msimbo wa uthibitishaji wa simu umezimwa',
            ],

        ],

    ],

];