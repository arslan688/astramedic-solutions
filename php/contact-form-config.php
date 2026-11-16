<?php

return [

    // All available services
    'services' => [
        'Consultancy' => 'Healthcare Licensing & Immigration',
        'Digital Marketing' => 'Healthcare Digital Marketing',
        'Web Development' => 'Web Development',
        'SEO and GEO' => 'SEO and GEO',
        'Healthcare Software' => 'Healthcare Software & Portals',
        'Medical Equipment' => 'Medical Equipment',
        'Other' => 'Other',
    ],

    // Fields shared by all forms
    'base_fields' => [
        'full_name' => [
            'label' => 'Full Name',
            'type' => 'text',
            'placeholder' => 'Enter your full name',
            'required' => true,
        ],
        'email' => [
            'label' => 'Email Address',
            'type' => 'email',
            'placeholder' => 'example@domain.com',
            'required' => true,
        ],
        'phone' => [
            'label' => 'Phone Number',
            'type' => 'tel',
            'placeholder' => '03001234567',
            'required' => false,
        ],
        'message' => [
            'label' => 'Your Message',
            'type' => 'textarea',
            'placeholder' => 'How can we help you?',
            'required' => true,
        ],
    ],

    // Page-specific form configuration
    'forms' => [

        // MAIN CONTACT PAGE
        'contact' => [
            'service_mode' => 'select',
        ],

        // DIGITAL MARKETING PAGE
        'healthcare-digital-marketing' => [
            'service_mode' => 'fixed',
            'service' => 'Digital Marketing',
            'show_service_note' => true,

            'fields' => [
                'phone' => [
                    'required' => true,
                ],
            ],

            'extra_fields' => [
                'business_type' => [
                    'label' => 'Type of Healthcare Business',
                    'type' => 'select',
                    'required' => false,
                    'options' => [
                        'clinic' => 'Clinic',
                        'hospital' => 'Hospital',
                        'aesthetic' => 'Aesthetic Clinic',
                        'physiotherapy' => 'Physiotherapy Center',
                        'other' => 'Other Business',
                    ],
                ],
                'marketing_package' => [
                    'label' => 'Interested Package',
                    'type' => 'select',
                    'required' => false,
                    'options' => [
                        'clinic' => 'Clinic Package',
                        'hospital' => 'Hospital Package ',
                        'network' => 'Healthcare Network',
                        'custom' => 'Custom Package',
                    ],
                ],
            ],
        ],

        // WEB DEVELOPMENT PAGE
        'web-development' => [
            'service_mode' => 'fixed',
            'service' => 'Web Development',

            'fields' => [
                'phone' => [
                    'show' => true,
                    'required' => false,
                ],
                'message' => [
                    'label' => 'Project Details',
                    'placeholder' => 'Tell us about the website you need',
                ],
            ],

            'extra_fields' => [
                'seo_goal' => [
                    'label' => 'What SEO Services Do You Need?',
                    'type' => 'select',
                    'required' => false,
                    'options' => [
                        'seo' => 'Search Engine Optimization (SEO)',
                        'geo' => 'Generative Engine Optimization (GEO)',
                        'both' => 'Both SEO and GEO',
                        'audit' => 'Website SEO Audit',
                    ]
                ],
                'website_package' => [
                    'label' => 'Interested Package for Website Development',
                    'type' => 'select',
                    'required' => false,
                    'options' => [
                        'clinic' => 'Personal PortFolio Website',
                        'hospital' => 'Buisness website',
                        'network' => 'Ecommerce Website',
                        'custom' => 'Other',
                    ],
                ],
                'website_url' => [
                    'label' => 'Existing Website URL if Any',
                    'type' => 'url',
                    'placeholder' => 'https://example.com',
                    'required' => false,
                ],
            ],
        ],

        // HEALTHCARE SOFTWARE PAGE
        'healthcare-software' => [
            'service_mode' => 'fixed',
            'service' => 'Healthcare Software',

            'extra_fields' => [
                'software_type' => [
                    'label' => 'Required Software',
                    'type' => 'select',
                    'required' => false,
                    'options' => [
                        'hospital' => 'Hospital Management Software',
                        'clinic' => 'Clinic Management Software',
                        'portal' => 'Healthcare Portal',
                        'custom' => 'Custom Software',
                    ],
                ],
            ],
        ],

        // LICENSING AND IMMIGRATION PAGE
        'healthcare-licensing' => [
            'service_mode' => 'fixed',
            'service' => 'Consultancy',

            'extra_fields' => [
                'assistance_type' => [
                    'label' => 'Which Licence or Immigration Assistance Do You Need?',
                    'type' => 'select',
                    'required' => true,
                    'options' => [
                        'dataflow' => 'DataFlow Verification & Gulf Exam Preparation',
                        'hcpc-coru' => 'HCPC (UK) & CORU (Ireland) Licensing Support',
                        'pbnz' => 'New Zealand & Australia Express Pathways',
                        'ahpc' => 'AHPC Registration Support (Pakistan)',
                        'Other' => 'Other',
                    ],
                ],
            ],
        ],

    ],
];