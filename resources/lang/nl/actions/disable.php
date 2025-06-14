<?php

return [
    'label' => 'Uitschakelen',
    'modal' => [
        'heading' => 'Telefoonverificatiecodes uitschakelen',
        'description' => 'Weet u zeker dat u geen telefoonverificatiecodes meer wilt ontvangen? Het uitschakelen verwijdert een extra beveiligingslaag van uw account.',
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
                'label' => 'Telefoonverificatiecodes uitschakelen',
            ],
        ],
    ],
    'notifications' => [
        'disabled' => [
            'title' => 'Telefoonverificatiecodes zijn uitgeschakeld',
        ],
    ],
];
