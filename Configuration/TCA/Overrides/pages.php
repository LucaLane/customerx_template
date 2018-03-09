<?php
defined('TYPO3_MODE') || die();

call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'customerx_template';

    /**
     * Customerx PageTS
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        $extensionKey,
        '../../../template_customerx/Configuration/PageTS/All.txt',
        'CUSTOMERX PageTs'
    );
});
