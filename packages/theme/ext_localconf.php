<?php

defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function () {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            '@import "EXT:theme/Configuration/TsConfig/Page/*.tsconfig"'
        );
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig(
            '@import "EXT:theme/Configuration/TsConfig/User/*.tsconfig"'
        );
    }
);
