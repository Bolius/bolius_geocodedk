<?php
namespace Bolius\BoliusGeocodedk\Domain\Repository;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Frederik Mogensen <frede@server-1.dk>
 *  
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 *
 *
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class MunicipalityRepository extends \TYPO3\CMS\Extbase\Persistence\Repository {

	/**
	 * Finds the municipal that are closest to the given coordinates
	 *
	 * @param double $latitude
	 * @param double $longitude
	 * @throws InvalidArgumentException in case parameters are not numeric
	 * @return \Bolius\BoliusGeocodedk\Domain\Model\Municipality
	 */
	public function getMunicipality($latitude, $longitude) {

		$query = $this->createQuery();

		// Quickly selecting the nearest municipal using Euclidian distance
		$query->statement('
			SELECT 
				uid,
				`district_number`,
				`district_name`,
				`municipality_number`,
				`municipality_name`,
				`zipcode`,
				`city_name`,
				`latitude`,
				`longitude`,
				(
					ABS((`latitude` - ' . $latitude . ')) +
					ABS((`longitude` - ' . $longitude . '))
				) as distance
			FROM `tx_geocodedk_domain_model_municipality`
			ORDER BY distance ASC');

		$res = $query->execute()->getFirst();

		// Return false if the found municipal is far away
		if ($res->getDistance() > 0.5) {
			return false;
		}
		return $res;
	}

	public function getDist($m, $latitude, $longitude){
		$sql = '
			SELECT
				uid,
					(
						ABS((`latitude` - ' . $latitude . ')) +
						ABS((`longitude` - ' . $longitude . '))
					) as distance
			FROM `tx_geocodedk_domain_model_municipality`
			WHERE uid='.$m->getUid().' Limit 1';

		$sqlResult = $GLOBALS['TYPO3_DB']->sql_query($sql);
		while($row = $GLOBALS['TYPO3_DB']->sql_fetch_assoc($sqlResult)) {
			return $row['distance'];
		}
	}

}
?>
