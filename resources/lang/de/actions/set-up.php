<?php

return [
    'label' => 'Einrichten',
    'modal' => [
        'heading' => 'Telefonverifizierungscodes einrichten',
        'description' => 'Sie müssen den 6-stelligen Code eingeben, den wir an Ihre Telefonnummer senden, jedes Mal wenn Sie sich anmelden oder sensible Aktionen durchführen. Überprüfen Sie Ihr Telefon auf einen 6-stelligen Code, um die Einrichtung abzuschließen.',
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
                'label' => 'Telefonverifizierungscodes aktivieren',
            ],
        ],
    ],
    'notifications' => [
        'enabled' => [
            'title' => 'Telefonverifizierungscodes wurden aktiviert',
        ],
    ],
];
