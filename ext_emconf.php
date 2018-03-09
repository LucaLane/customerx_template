<?php

/**
 * Extension Manager/Repository config file for ext "customerx_template".
 */
$EM_CONF[$_EXTKEY] = array(
    'title' => 'Template Extension dummy',
    'description' => 'Extension for customer specific requirements.',
    'category' => 'frontend',
    'author' => 'Luca Aebischer',
    'author_email' => 'luca.aebischer@cabag.ch',
    'author_company' => 'cab services ag',
    'state' => 'stable',
    'uploadfolder' => '0',
    'modify_tables' => '',
    'clearCacheOnLoad' => 1,
    'version' => '1.0.1',
    'constraints' => array(
        'depends' => array(
            'typo3' => '8.7.0-9.5.99',
        ),
        'conflicts' => array(
        ),
        'suggests' => array(
			'powermailrecaptcha' => ''
        ),
    ),
);
