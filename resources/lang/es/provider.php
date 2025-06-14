<?php

return [
    'management_schema' => [
        'actions' => [
            'label' => 'Códigos de verificación telefónica',
            'below_content' => 'Reciba un código temporal en su número de teléfono para verificar su identidad durante el inicio de sesión.',
            'messages' => [
                'enabled' => 'Activado',
                'disabled' => 'Desactivado',
            ],
        ],
    ],
    'login_form' => [
        'label' => 'Enviar un código a su teléfono',
        'code' => [
            'label' => 'Ingrese el código de 6 dígitos que le enviamos por teléfono',
            'validation_attribute' => 'código',
            'actions' => [
                'resend' => [
                    'label' => 'Enviar un nuevo código por teléfono',
                    'notifications' => [
                        'resent' => [
                            'title' => 'Le hemos enviado un nuevo código por teléfono',
                        ],
                    ],
                ],
            ],
            'messages' => [
                'invalid' => 'El código que ingresó no es válido.',
            ],
        ],
    ],
];
