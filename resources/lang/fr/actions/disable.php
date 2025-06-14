<?php

return [
    'label' => 'Désactiver',
    'modal' => [
        'heading' => 'Désactiver les codes de vérification téléphonique',
        'description' => 'Êtes-vous sûr de vouloir arrêter de recevoir des codes de vérification téléphonique ? La désactivation supprimera une couche supplémentaire de sécurité de votre compte.',
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
                'label' => 'Désactiver les codes de vérification téléphonique',
            ],
        ],
    ],
    'notifications' => [
        'disabled' => [
            'title' => 'Les codes de vérification téléphonique ont été désactivés',
        ],
    ],
];
