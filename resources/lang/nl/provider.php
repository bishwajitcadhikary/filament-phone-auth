<?php

return [
    'label' => 'Telefoonverificatiecodes',

    'description' => 'Krijg een tijdelijke code via de telefoon om uw identiteit te verifiëren bij het inloggen.',

    'enabled' => 'Ingeschakeld',

    'disabled' => 'Uitgeschakeld',

    'login' => [
        'label' => 'Stuur een code naar uw telefoon',

        'description' => 'Voer de 6-cijferige code in die we naar uw telefoon hebben gestuurd.',

        'code' => [
            'label' => 'Code',
            'placeholder' => 'Voer de 6-cijferige code in',
        ],

        'resend' => [
            'label' => 'Stuur een nieuwe code naar uw telefoon',
            'notification' => [
                'title' => 'We hebben een nieuwe code naar uw telefoon gestuurd',
            ],
        ],

        'invalid' => 'De code die u heeft ingevoerd is ongeldig.',
    ],
];
