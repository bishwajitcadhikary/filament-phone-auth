<?php

return [

    'management_schema' => [

        'actions' => [

            'label' => 'Telefonske potrditvene kode',

            'below_content' => 'Prejemajte začasno kodo na svojo telefonsko številko za preverjanje identitete med prijavo.',

            'messages' => [
                'enabled' => 'Omogočeno',
                'disabled' => 'Onemogočeno',
            ],

        ],

    ],

    'login_form' => [

        'label' => 'Pošlji kodo na svoj telefon',

        'code' => [

            'label' => 'Vnesite 6-mestno kodo, ki smo vam jo poslali po telefonu',

            'validation_attribute' => 'code',

            'actions' => [

                'resend' => [

                    'label' => 'Pošlji novo kodo po telefonu',

                    'notifications' => [

                        'resent' => [
                            'title' => 'Poslali smo vam novo kodo po telefonu',
                        ],

                    ],

                ],

            ],

            'messages' => [
                'invalid' => 'Koda, ki ste jo vnesli, je neveljavna.',
            ],
        ],
    ],
];