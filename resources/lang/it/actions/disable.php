<?php

return [
    'label' => 'Disattiva',
    'modal' => [
        'heading' => 'Disattiva codici di verifica telefonica',
        'description' => 'Sei sicuro di voler smettere di ricevere codici di verifica telefonica? La disattivazione rimuoverà un livello aggiuntivo di sicurezza dal tuo account.',
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
                'label' => 'Disattiva codici di verifica telefonica',
            ],
        ],
    ],
    'notifications' => [
        'disabled' => [
            'title' => 'I codici di verifica telefonica sono stati disattivati',
        ],
    ],
];
