<?php

return [

    'label' => 'Iestatīt',

    'modal' => [

        'heading' => 'Tālruņa verifikācijas kodu iestatīšana',

        'description' => 'Jums jāievada 6 ciparu kods, ko nosūtījām uz jūsu tālruni, lai pieteiktos vai veiktu jutīgas darbības.',

        'form' => [

            'code' => [

                'label' => 'Ievadiet 6 ciparu kodu, ko nosūtījām uz jūsu tālruni',

                'validation_attribute' => 'kods',

                'actions' => [

                    'resend' => [

                        'label' => 'Nosūtīt jaunu kodu uz jūsu tālruni',

                        'notifications' => [

                            'resent' => [
                                'title' => 'Mēs esam nosūtījuši jaunu kodu uz jūsu tālruni',
                            ],

                        ],

                    ],

                ],

                'messages' => [

                    'invalid' => 'Ievadītais kods nav derīgs.',

                ],

            ],

        ],

        'actions' => [

            'submit' => [
                'label' => 'Ieslēgt tālruņa verifikācijas kodus',
            ],

        ],

    ],

    'notifications' => [

        'enabled' => [
            'title' => 'Tālruņa verifikācijas kodi ir ieslēgti',
        ],

    ],

];
