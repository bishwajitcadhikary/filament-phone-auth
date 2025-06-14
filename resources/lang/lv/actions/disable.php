<?php

return [

    'label' => 'Izslēgt',

    'modal' => [

        'heading' => 'Tālruņa verifikācijas kodu izslēgšana',

        'description' => 'Vai tiešām vēlaties pārtraukt saņemt tālruņa verifikācijas kodus? Šīs funkcijas izslēgšana noņems papildu drošības slāni no jūsu konta.',

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
                'label' => 'Izslēgt tālruņa verifikācijas kodus',
            ],

        ],

    ],

    'notifications' => [

        'disabled' => [
            'title' => 'Tālruņa verifikācijas kodi ir izslēgti',
        ],

    ],

];
