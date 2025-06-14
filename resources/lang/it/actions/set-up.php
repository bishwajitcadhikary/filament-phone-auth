<?php

return [
    'label' => 'Configura',
    'modal' => [
        'heading' => 'Configura codici di verifica telefonica',
        'description' => 'Dovrai inserire il codice a 6 cifre che ti inviamo al tuo numero di telefono ogni volta che accedi o esegui azioni sensibili. Controlla il tuo telefono per un codice a 6 cifre per completare la configurazione.',
        'form' => [
            'code' => [
                'label' => 'Inserisci il codice a 6 cifre che ti abbiamo inviato al telefono',
                'validation_attribute' => 'codice',
                'actions' => [
                    'resend' => [
                        'label' => 'Invia un nuovo codice al tuo telefono',
                        'notifications' => [
                            'resent' => [
                                'title' => 'Ti abbiamo inviato un nuovo codice al telefono',
                            ],
                        ],
                    ],
                ],
                'messages' => [
                    'invalid' => 'Il codice inserito non è valido.',
                ],
            ],
        ],
        'actions' => [
            'submit' => [
                'label' => 'Attiva codici di verifica telefonica',
            ],
        ],
    ],
    'notifications' => [
        'enabled' => [
            'title' => 'I codici di verifica telefonica sono stati attivati',
        ],
    ],
];
