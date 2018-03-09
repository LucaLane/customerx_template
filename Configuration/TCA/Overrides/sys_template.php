<?php
defined('TYPO3_MODE') || die();
/***************
 * Default TypoScript
 */
// @extensionScannerIgnoreLine
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'customerx_template',
    'Configuration/TypoScript',
    'CUSTOMERX TypoScript'
);