<?php

return [

    'management_schema' => [

        'label' => 'Kode Verifikasi Telepon',

        'below_content' => 'Dapatkan kode sementara untuk verifikasi identitas Anda.',

        'messages' => [

            'enabled' => [
                'title' => 'Kode verifikasi telepon telah diaktifkan',
            ],

            'disabled' => [
                'title' => 'Kode verifikasi telepon telah dinonaktifkan',
            ],

        ],

    ],

    'login_form' => [

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

];
