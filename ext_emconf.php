<?php
/************************************************************************
 * Extension Manager/Repository config file for ext "tmpl_ssgaac".
 ************************************************************************/
$EM_CONF[$_EXTKEY] = array(
    'title' => 'typo3 tmpl ssgaac',
    'description' => 'Base extension for project "tmpl_ssgaac"',
    'category' => 'extension',
    'constraints' => array(
        'depends' => array(
            'typo3' => '7.6.0-8.99.99',
            'fluid_styled_content' => '7.6.0-8.99.99'
        ),
        'conflicts' => array(
        ),
    ),
    'autoload' => array(
        'psr-4' => array(
            'GoettingenStateAndUniversityLibraryGermany\\Typo3TmplSsgaac\\' => 'Classes'
        ),
    ),
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Joëlle Blache',
    'author_email' => 'blache@sub.uni-goettingen.de',
    'author_company' => 'Goettingen State and University Library Germany',
    'version' => '1.0.0',
);
