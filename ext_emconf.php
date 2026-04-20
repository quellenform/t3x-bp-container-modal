<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Modal Container for Bootstrap Package',
    'description' => 'Adds a modal window container to EXT:bootstrap_package.',
    'category' => 'fe',
    'state' => 'beta',
    'clearcacheonload' => true,
    'author' => 'Stephan Kellermayr',
    'author_email' => 'typo3@quellenform.at',
    'author_company' => 'Kellermayr KG',
    'version' => '0.1.0',
    'constraints' => [
        'depends' => [
            'typo3' => '13.4.0-14.9.99',
            'iconpack' => '1.5.3-',
            'bootstrap_package' => '16.0.0-16.9.99'
        ],
        'conflicts' => [],
        'suggests' => []
    ]
];
