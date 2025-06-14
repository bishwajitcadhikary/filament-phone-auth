<?php

return [

    'label' => 'Aseta',

    'modal' => [

        'heading' => 'Puhelinverifikaatiokoodien asettaminen',

        'description' => 'Sinun on syötettävä 6-numeroinen koodi, jonka lähetimme puhelimeesi, jotta voit kirjautua sisään tai suorittaa arkaluontoisia toimintoja.',

        'form' => [

            'code' => [

                'label' => 'Syötä 6-numeroinen koodi, jonka lähetimme puhelimeesi',

                'validation_attribute' => 'koodi',

                'actions' => [

                    'resend' => [

                        'label' => 'Lähetä uusi koodi puhelimeesi',

                        'notifications' => [

                            'resent' => [
                                'title' => 'Olemme lähettäneet sinulle uuden koodin puhelimeesi',
                            ],

                        ],

                    ],

                ],

                'messages' => [

                    'invalid' => 'Syöttämäsi koodi ei ole kelvollinen.',

                ],

            ],

        ],

        'actions' => [

            'submit' => [
                'label' => 'Ota puhelinverifikaatiokoodit käyttöön',
            ],

        ],

    ],

    'notifications' => [

        'enabled' => [
            'title' => 'Puhelinverifikaatiokoodit on otettu käyttöön',
        ],

    ],

];
