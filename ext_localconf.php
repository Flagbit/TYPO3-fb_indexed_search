<?php
if (!defined ('TYPO3_MODE')) {
 	die ('Access denied.');
}

if (!Tx_FbIndexedSearch_Utility_Compatibility::isEqualOrHigherSixZero()) {
	$extPath = t3lib_extMgm::extPath('fb_indexed_search');
	$GLOBALS['TYPO3_CONF_VARS']['FE']['XCLASS']['ext/indexed_search/pi/class.tx_indexedsearch.php'] = $extPath.'Classes/Xclass/ux_tx_indexedsearch.php';
} else {
	$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['tx_indexedsearch'] = array(
		'className' => 'Flagbit\\FbIndexedSearch\\Xclass\\SearchFormController',
	);
}
?>