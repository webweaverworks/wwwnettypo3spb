<?php

/**
 * Extension Manager/Repository config file for ext "webweaverworks".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'WebWeaverWorks',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-9.5.99',
            'fluid_styled_content' => '8.7.0-9.5.99',
            'rte_ckeditor' => '8.7.0-9.5.99',
	    'gridelements' => '8.0.0-0.0.0',
	    'bootstrap_grids' => '1.4.0-0.0.0',
	    'news' => '6.3.0-0.0.0',
	    'cs_seo' => '2.2.0-0.0.0',
            'form_legacy' => '0.0.0-0.0.0',
            'ke_search' => '2.6.3-0.0.0',
            'realurl' => '2.3.1-0.0.0'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Webweaverworksnet\\Webweaverworks\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Jeffrey P.A. de Bruijn',
    'author_email' => 'jeffrey.de.bruijn@gmail.com',
    'author_company' => 'WebWeaverWorks.Net',
    'version' => '1.0.0',
];
