<?php

return [

    'management_schema' => [

        'actions' => [

            'label' => 'Msimbo wa uthibitishaji wa simu',

            'below_content' => 'Pokea msimbo wa muda kwenye namba yako ya simu ili kuthibitisha utambulisho wako wakati wa kuingia.',

            'messages' => [
                'enabled' => 'Imewashwa',
                'disabled' => 'Imezimwa',
            ],

        ],

    ],

    'login_form' => [

        'label' => 'Tuma msimbo kwenye simu yako',

        'code' => [

            'label' => 'Ingiza msimbo wa tarakimu 6 tuliokutumia kwa simu',

            'validation_attribute' => 'code',

            'actions' => [

                'resend' => [

                    'label' => 'Tuma msimbo mpya kwa simu',

                    'notifications' => [

                        'resent' => [
                            'title' => 'Tumekutumia msimbo mpya kwa simu',
                        ],

                    ],

                ],

            ],

            'messages' => [
                'invalid' => 'Msimbo ulioingiza si sahihi.',
            ],
        ],
    ],
];
