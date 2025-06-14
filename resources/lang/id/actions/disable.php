<?php

return [

    'label' => 'Nonaktifkan',

    'modal' => [

        'heading' => 'Nonaktifkan Kode Verifikasi Telepon',

        'description' => 'Apakah Anda yakin ingin berhenti menerima kode verifikasi telepon? Menonaktifkan fitur ini akan menghapus lapisan keamanan tambahan dari akun Anda.',

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
                'label' => 'Nonaktifkan kode verifikasi telepon',
            ],

        ],

    ],

    'notifications' => [

        'disabled' => [
            'title' => 'Kode verifikasi telepon telah dinonaktifkan',
        ],

    ],

];
