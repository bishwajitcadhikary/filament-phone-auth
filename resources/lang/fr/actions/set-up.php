<?php

return [
    'label' => 'Configurer',
    'modal' => [
        'heading' => 'Configurer les codes de vérification téléphonique',
        'description' => 'Vous devrez entrer le code à 6 chiffres que nous envoyons à votre numéro de téléphone chaque fois que vous vous connectez ou effectuez des actions sensibles. Vérifiez votre téléphone pour obtenir un code à 6 chiffres pour terminer la configuration.',
        'form' => [
            'code' => [
                'label' => 'Entrez le code à 6 chiffres que nous avons envoyé à votre téléphone',
                'validation_attribute' => 'code',
                'actions' => [
                    'resend' => [
                        'label' => 'Envoyer un nouveau code à votre téléphone',
                        'notifications' => [
                            'resent' => [
                                'title' => 'Nous vous avons envoyé un nouveau code à votre téléphone',
                            ],
                        ],
                    ],
                ],
                'messages' => [
                    'invalid' => 'Le code que vous avez saisi n\'est pas valide.',
                ],
            ],
        ],
        'actions' => [
            'submit' => [
                'label' => 'Activer les codes de vérification téléphonique',
            ],
        ],
    ],
    'notifications' => [
        'enabled' => [
            'title' => 'Les codes de vérification téléphonique ont été activés',
        ],
    ],
];
