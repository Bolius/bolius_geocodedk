<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Bolius Geocode Denmark');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_boliusgeocodedk_domain_model_municipality', 'EXT:bolius_geocodedk/Resources/Private/Language/locallang_csh_tx_boliusgeocodedk_domain_model_municipality.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_boliusgeocodedk_domain_model_municipality');


?>
