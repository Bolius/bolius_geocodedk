<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_geocodedk_domain_model_municipality'] = array(
	'ctrl' => $TCA['tx_geocodedk_domain_model_municipality']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, district_number, district_name, municipality_number, municipality_name, zipcode, city_name, latitude, longitude',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, district_number, district_name, municipality_number, municipality_name, zipcode, city_name, latitude, longitude,--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
	
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_geocodedk_domain_model_municipality',
				'foreign_table_where' => 'AND tx_geocodedk_domain_model_municipality.pid=###CURRENT_PID### AND tx_geocodedk_domain_model_municipality.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),

		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
	
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'district_number' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:geocodedk/Resources/Private/Language/locallang_db.xlf:tx_geocodedk_domain_model_municipality.district_number',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'district_name' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:geocodedk/Resources/Private/Language/locallang_db.xlf:tx_geocodedk_domain_model_municipality.district_name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'municipality_number' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:geocodedk/Resources/Private/Language/locallang_db.xlf:tx_geocodedk_domain_model_municipality.municipality_number',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'municipality_name' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:geocodedk/Resources/Private/Language/locallang_db.xlf:tx_geocodedk_domain_model_municipality.municipality_name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'zipcode' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:geocodedk/Resources/Private/Language/locallang_db.xlf:tx_geocodedk_domain_model_municipality.zipcode',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'city_name' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:geocodedk/Resources/Private/Language/locallang_db.xlf:tx_geocodedk_domain_model_municipality.city_name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'latitude' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:geocodedk/Resources/Private/Language/locallang_db.xlf:tx_geocodedk_domain_model_municipality.latitude',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'double2'
			),
		),
		'longitude' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:geocodedk/Resources/Private/Language/locallang_db.xlf:tx_geocodedk_domain_model_municipality.longitude',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'double2'
			),
		),
		'distance' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:geocodedk/Resources/Private/Language/locallang_db.xlf:tx_geocodedk_domain_model_municipality.distance',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'double2'
			),
		),
	),
);

?>
