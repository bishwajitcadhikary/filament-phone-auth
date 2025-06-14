<?php

return [

    'label' => 'Απενεργοποίηση',

    'modal' => [

        'heading' => 'Απενεργοποίηση κωδικών επαλήθευσης τηλεφώνου',

        'description' => 'Είστε βέβαιοι ότι θέλετε να σταματήσετε να λαμβάνετε κωδικούς επαλήθευσης τηλεφώνου; Η απενεργοποίηση αυτής της λειτουργίας θα αφαιρέσει ένα επιπλέον επίπεδο ασφαλείας από τον λογαριασμό σας.',

        'form' => [

            'code' => [

                'label' => 'Εισάγετε τον 6ψήφιο κωδικό που σας στείλαμε στο τηλέφωνό σας',

                'validation_attribute' => 'κωδικός',

                'actions' => [

                    'resend' => [

                        'label' => 'Στείλε νέο κωδικό στο τηλέφωνό σου',

                        'notifications' => [

                            'resent' => [
                                'title' => 'Σας έχουμε στείλει νέο κωδικό στο τηλέφωνό σας',
                            ],

                        ],

                    ],

                ],

                'messages' => [

                    'invalid' => 'Ο κωδικός που εισάγατε δεν είναι έγκυρος.',

                ],

            ],

        ],

        'actions' => [

            'submit' => [
                'label' => 'Απενεργοποίηση κωδικών επαλήθευσης τηλεφώνου',
            ],

        ],

    ],

    'notifications' => [

        'disabled' => [
            'title' => 'Οι κωδικοί επαλήθευσης τηλεφώνου έχουν απενεργοποιηθεί',
        ],

    ],

];
