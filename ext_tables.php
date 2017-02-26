<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}


// Default TypoScript for Typo3TmplSsgaac
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    $_EXTKEY,
    'Configuration/TypoScript',
    'SUB tmpl ssgaac'
);
