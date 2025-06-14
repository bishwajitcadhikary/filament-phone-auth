<?php

return [
    'management_schema' => [
        'actions' => [
            'label' => 'Telefonverifizierungscodes',
            'below_content' => 'Erhalten Sie einen temporären Code auf Ihrer Telefonnummer, um Ihre Identität während der Anmeldung zu verifizieren.',
            'messages' => [
                'enabled' => 'Aktiviert',
                'disabled' => 'Deaktiviert',
            ],
        ],
    ],
    'login_form' => [
        'label' => 'Code an Ihr Telefon senden',
        'code' => [
            'label' => 'Geben Sie den 6-stelligen Code ein, den wir Ihnen per Telefon gesendet haben',
            'validation_attribute' => 'Code',
            'actions' => [
                'resend' => [
                    'label' => 'Neuen Code per Telefon senden',
                    'notifications' => [
                        'resent' => [
                            'title' => 'Wir haben Ihnen einen neuen Code per Telefon gesendet',
                        ],
                    ],
                ],
            ],
            'messages' => [
                'invalid' => 'Der eingegebene Code ist ungültig.',
            ],
        ],
    ],
];
