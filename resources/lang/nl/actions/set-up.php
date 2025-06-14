<?php

return [
    'label' => 'Instellen',
    'modal' => [
        'heading' => 'Telefoonverificatiecodes instellen',
        'description' => 'U moet de 6-cijferige code invoeren die we naar uw telefoonnummer sturen elke keer dat u inlogt of gevoelige acties uitvoert. Controleer uw telefoon voor een 6-cijferige code om de installatie te voltooien.',
        'form' => [
            'code' => [
                'label' => 'Voer de 6-cijferige code in die we naar uw telefoon hebben gestuurd',
                'validation_attribute' => 'code',
                'actions' => [
                    'resend' => [
                        'label' => 'Nieuwe code naar uw telefoon sturen',
                        'notifications' => [
                            'resent' => [
                                'title' => 'We hebben een nieuwe code naar uw telefoon gestuurd',
                            ],
                        ],
                    ],
                ],
                'messages' => [
                    'invalid' => 'De ingevoerde code is ongeldig.',
                ],
            ],
        ],
        'actions' => [
            'submit' => [
                'label' => 'Telefoonverificatiecodes inschakelen',
            ],
        ],
    ],
    'notifications' => [
        'enabled' => [
            'title' => 'Telefoonverificatiecodes zijn ingeschakeld',
        ],
    ],
];
