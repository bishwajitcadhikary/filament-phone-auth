<?php

return [
    'label' => 'Desactivar',
    'modal' => [
        'heading' => 'Desactivar códigos de verificación telefónica',
        'description' => '¿Está seguro de que desea dejar de recibir códigos de verificación telefónica? Desactivar esto eliminará una capa adicional de seguridad de su cuenta.',
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
                'label' => 'Desactivar códigos de verificación telefónica',
            ],
        ],
    ],
    'notifications' => [
        'disabled' => [
            'title' => 'Los códigos de verificación telefónica han sido desactivados',
        ],
    ],
];
