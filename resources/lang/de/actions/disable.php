<?php

return [
    'label' => 'Deaktivieren',
    'modal' => [
        'heading' => 'Telefonverifizierungscodes deaktivieren',
        'description' => 'Sind Sie sicher, dass Sie keine Telefonverifizierungscodes mehr erhalten möchten? Die Deaktivierung entfernt eine zusätzliche Sicherheitsebene von Ihrem Konto.',
        'form' => [
            'code' => [
                'label' => 'Geben Sie den 6-stelligen Code ein, den wir an Ihr Telefon gesendet haben',
                'validation_attribute' => 'Code',
                'actions' => [
                    'resend' => [
                        'label' => 'Neuen Code an Ihr Telefon senden',
                        'notifications' => [
                            'resent' => [
                                'title' => 'Wir haben Ihnen einen neuen Code an Ihr Telefon gesendet',
                            ],
                        ],
                    ],
                ],
                'messages' => [
                    'invalid' => 'Der eingegebene Code ist ungültig.',
                ],
            ],
        ],
        'actions' => [
            'submit' => [
                'label' => 'Telefonverifizierungscodes deaktivieren',
            ],
        ],
    ],
    'notifications' => [
        'disabled' => [
            'title' => 'Telefonverifizierungscodes wurden deaktiviert',
        ],
    ],
];
