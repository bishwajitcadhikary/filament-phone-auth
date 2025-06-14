<?php

return [
    'management_schema' => [
        'actions' => [
            'label' => 'Codici di verifica telefonica',
            'below_content' => 'Ricevi un codice temporaneo sul tuo numero di telefono per verificare la tua identità durante l\'accesso.',
            'messages' => [
                'enabled' => 'Attivato',
                'disabled' => 'Disattivato',
            ],
        ],
    ],
    'login_form' => [
        'label' => 'Invia un codice al tuo telefono',
        'code' => [
            'label' => 'Inserisci il codice a 6 cifre che ti abbiamo inviato al telefono',
            'validation_attribute' => 'codice',
            'actions' => [
                'resend' => [
                    'label' => 'Invia un nuovo codice al telefono',
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
];
