<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "fb_indexed_search".
 *
 * Auto generated 20-06-2013 08:57
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Flagbit Indexed Search Extensions',
	'description' => 'A various collection of additional Indexed Search components.',
	'category' => 'misc',
	'author' => 'Flagbit GmbH & Co. KG',
	'author_email' => 'info@flagbit.de',
	'shy' => '',
	'dependencies' => 'indexed_search',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author_company' => '',
	'version' => '0.0.2',
	'constraints' => array(
		'depends' => array(
			'indexed_search' => '',
			'typo3' => '4.5.0-6.1.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:9:{s:9:"ChangeLog";s:4:"6ba7";s:16:"ext_autoload.php";s:4:"0954";s:12:"ext_icon.gif";s:4:"04d2";s:17:"ext_localconf.php";s:4:"631e";s:33:"Classes/Utility/Compatibility.php";s:4:"724f";s:39:"Classes/Xclass/SearchFormController.php";s:4:"0a3f";s:38:"Classes/Xclass/ux_tx_indexedsearch.php";s:4:"5915";s:38:"Configuration/TypoScript/constants.txt";s:4:"d41d";s:34:"Configuration/TypoScript/setup.txt";s:4:"6a4d";}',
	'suggests' => array(
	),
);

?>