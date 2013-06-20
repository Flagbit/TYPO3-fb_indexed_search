<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Michael Bentz (michael.bentz@flagbit.de)
 * 
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *  A copy is found in the textfile GPL.txt and important notices to the license
 *  from the author is found in LICENSE.txt distributed with these scripts.
 *
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/
/**
 * Compatibility class which is used as wrapper for deprecated functions
 *
 * @package TYPO3
 * @subpackage fb_indexed_search
 * @author	Michael Bentz <michael.bentz@flagbit.de>
 */
class Tx_FbIndexedSearch_Utility_Compatibility {

	/**
	 * Returns TRUE if the current TYPO3 version is compatible to the input version
	 * Notice that this function compares branches, not versions
	 * (4.0.1 would be > 4.0.0 although they use the same compat_version)
	 *
	 * @param string $verNumberStr Minimum branch number: format "4.0" NOT "4.0.0"
	 * @return boolean Returns TRUE if compatible with the provided version number
	 */
	public static function convertVersionNumberToInteger($verNumberStr) {
		$result = '';

		if (self::isEqualOrHigherSixZero()) {
			$result = \TYPO3\CMS\Core\Utility\VersionNumberUtility::convertVersionNumberToInteger($verNumberStr);
		} elseif (class_exists('t3lib_utility_VersionNumber')) {
			$result = t3lib_utility_VersionNumber::convertVersionNumberToInteger($verNumberStr);
		} else {
			$result = t3lib_div::int_from_ver($verNumberStr);
		}

		return $result;
	}

	/**
	 * Simple method to check if current TYPO3 version is equal or higher than 6.0
	 *
	 * @return boolean
	 */
	public static function isEqualOrHigherSixZero() {
		$version = TYPO3_version;
		$firstNumber = (int)$version{0};

		return ($firstNumber >= 6);
	}
}
?>