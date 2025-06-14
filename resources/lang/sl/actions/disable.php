<?php

return [

    'label' => 'Izklopi',

    'modal' => [

        'heading' => 'Onemogoči telefonske potrditvene kode',

        'description' => 'Ali ste prepričani, da želite prenehati prejemati telefonske potrditvene kode? Z onemogočanjem boste odstranili dodatno plast varnosti iz svojega računa.',

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

            'disable' => [
                'label' => 'Onemogoči',
            ],

        ],

        'notifications' => [

            'disabled' => [
                'title' => 'Telefonske potrditvene kode so onemogočene',
            ],

        ],

    ],

];