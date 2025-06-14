<?php

return [

    'label' => 'Sanidi',

    'modal' => [

        'heading' => 'Sanidi msimbo wa uthibitishaji wa simu',

        'description' => 'Utahitaji kuingiza msimbo wa tarakimu 6 tunaotuma kwenye namba yako ya simu kila wakati unapoingia au kufanya vitendo nyeti. Angalia simu yako kwa msimbo wa tarakimu 6 ili kukamilisha usanidi.',

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

            'set_up' => [
                'label' => 'Sanidi',
            ],

        ],

        'notifications' => [

            'enabled' => [
                'title' => 'Msimbo wa uthibitishaji wa simu umewashwa',
            ],

        ],

    ],

];