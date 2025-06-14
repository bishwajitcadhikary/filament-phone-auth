<?php

return [

    'label' => 'Atur',

    'modal' => [

        'heading' => 'Pengaturan Kode Verifikasi Telepon',

        'description' => 'Anda harus memasukkan kode 6 digit yang kami kirim ke telepon Anda untuk masuk atau melakukan tindakan sensitif.',

        'form' => [

            'code' => [

                'label' => 'Masukkan kode 6 digit yang kami kirim ke telepon Anda',

                'validation_attribute' => 'kode',

                'actions' => [

                    'resend' => [

                        'label' => 'Kirim kode baru ke telepon Anda',

                        'notifications' => [

                            'resent' => [
                                'title' => 'Kami telah mengirim kode baru ke telepon Anda',
                            ],

                        ],

                    ],

                ],

                'messages' => [

                    'invalid' => 'Kode yang Anda masukkan tidak valid.',

                ],

            ],

        ],

        'actions' => [

            'submit' => [
                'label' => 'Aktifkan kode verifikasi telepon',
            ],

        ],

    ],

    'notifications' => [

        'enabled' => [
            'title' => 'Kode verifikasi telepon telah diaktifkan',
        ],

    ],

];
