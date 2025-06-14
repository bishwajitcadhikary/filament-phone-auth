<?php

return [
    'management_schema' => [
        'actions' => [
            'label' => 'Codes de vérification téléphonique',
            'below_content' => 'Recevez un code temporaire sur votre numéro de téléphone pour vérifier votre identité lors de la connexion.',
            'messages' => [
                'enabled' => 'Activé',
                'disabled' => 'Désactivé',
            ],
        ],
    ],
    'login_form' => [
        'label' => 'Envoyer un code à votre téléphone',
        'code' => [
            'label' => 'Entrez le code à 6 chiffres que nous vous avons envoyé par téléphone',
            'validation_attribute' => 'code',
            'actions' => [
                'resend' => [
                    'label' => 'Envoyer un nouveau code par téléphone',
                    'notifications' => [
                        'resent' => [
                            'title' => 'Nous vous avons envoyé un nouveau code par téléphone',
                        ],
                    ],
                ],
            ],
            'messages' => [
                'invalid' => 'Le code que vous avez saisi n\'est pas valide.',
            ],
        ],
    ],
];
