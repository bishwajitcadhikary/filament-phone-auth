<?php

return [

    'label' => 'Nastavi',

    'modal' => [

        'heading' => 'Nastavi telefonske potrditvene kode',

        'description' => 'Vsakič, ko se prijavite ali izvajate občutljiva dejanja, boste morali vnesti 6-mestno kodo, ki jo pošljemo na vašo telefonsko številko. Za dokončanje nastavitve preverite svoj telefon za 6-mestno kodo.',

        'form' => [

            'code' => [

                'label' => 'Vnesite 6-mestno kodo, ki smo jo poslali na vaš telefon',

                'validation_attribute' => 'code',

                'actions' => [

                    'resend' => [

                        'label' => 'Pošlji novo kodo na svoj telefon',

                        'notifications' => [

                            'resent' => [
                                'title' => 'Poslali smo vam novo kodo na vaš telefon',
                            ],

                        ],

                    ],

                ],

                'messages' => [

                    'invalid' => 'Koda, ki ste jo vnesli, je neveljavna.',

                ],

            ],

        ],

        'actions' => [

            'set_up' => [
                'label' => 'Nastavi',
            ],

        ],

        'notifications' => [

            'enabled' => [
                'title' => 'Telefonske potrditvene kode so omogočene',
            ],

        ],

    ],

];