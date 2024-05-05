<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Digital Marketing Framwork - Distributor - Pdf',
    'description' => 'Data Provider for PDFs with fillable form fields',
    'category' => 'be',
    'author' => 'Daniel Bagel',
    'author_email' => 'info@mediatis.de',
    'author_company' => 'Mediatis AG',
    'state' => 'stable',
    'version' => '1.0.1',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-12.4.99',
            'dmf_distributor_core' => '2.0.0-2.99.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
