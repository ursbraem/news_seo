<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Additional SEO features for EXT:news',
    'description' => 'Indivdual indexing/robot information for each news article record',
    'category' => 'frontend',
    'author' => 'Georg Ringer',
    'author_email' => 'mail@ringer.it',
    'state' => 'stable',
    'clearCacheOnLoad' => true,
    'version' => '1.0.2',
    'constraints' =>
        [
            'depends' => [
                'typo3' => '10.4.0-12.1.99',
                'seo' => '10.4.0-12.1.99',
                'news' => '8.6.0-10.1.99',
            ],
            'conflicts' => [],
            'suggests' => [],
        ],
];
