<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Bolius Geocode Denmark');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_boliusgeocodedk_domain_model_municipality', 'EXT:bolius_geocodedk/Resources/Private/Language/locallang_csh_tx_boliusgeocodedk_domain_model_municipality.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_boliusgeocodedk_domain_model_municipality');
$TCA['tx_boliusgeocodedk_domain_model_municipality'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:bolius_geocodedk/Resources/Private/Language/locallang_db.xlf:tx_boliusgeocodedk_domain_model_municipality',
		'label' => 'district_number',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',

		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'district_number,district_name,municipality_number,municipality_name,zipcode,city_name,latitude,longitude,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Municipality.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_boliusgeocodedk_domain_model_municipality.gif'
	),
);

?>