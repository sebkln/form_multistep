<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addStaticFile(
    'form_multistep',
    'Configuration/TypoScript',
    'Form examples: multi-step navigation'
);
