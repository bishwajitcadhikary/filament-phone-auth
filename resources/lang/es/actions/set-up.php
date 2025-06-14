<?php

return [
    'label' => 'Configurar',
    'modal' => [
        'heading' => 'Configurar códigos de verificación telefónica',
        'description' => 'Necesitará ingresar el código de 6 dígitos que le enviamos a su número de teléfono cada vez que inicie sesión o realice acciones sensibles. Revise su teléfono para obtener un código de 6 dígitos para completar la configuración.',
        'form' => [
            'code' => [
                'label' => 'Ingrese el código de 6 dígitos que enviamos a su teléfono',
                'validation_attribute' => 'código',
                'actions' => [
                    'resend' => [
                        'label' => 'Enviar un nuevo código a su teléfono',
                        'notifications' => [
                            'resent' => [
                                'title' => 'Le hemos enviado un nuevo código a su teléfono',
                            ],
                        ],
                    ],
                ],
                'messages' => [
                    'invalid' => 'El código que ingresó no es válido.',
                ],
            ],
        ],
        'actions' => [
            'submit' => [
                'label' => 'Activar códigos de verificación telefónica',
            ],
        ],
    ],
    'notifications' => [
        'enabled' => [
            'title' => 'Los códigos de verificación telefónica han sido activados',
        ],
    ],
];
