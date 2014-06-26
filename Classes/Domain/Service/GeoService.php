<?php
namespace Bolius\BoliusGeocodedk\Domain\Service;
use \TYPO3\CMS\Core\Utility\GeneralUtility;
use \TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

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
class GeoService extends \TYPO3\CMS\Core\Service\AbstractService {

	/**
	 * municipalityRepository
	 *
	 * @var \Bolius\BoliusGeocodedk\Domain\Repository\MunicipalityRepository
	 * @inject
	 */
	protected $municipalityRepository;

	/**
	 * action getMunicipality
	 *
	 * Returns the closest municipal to the given coordinat
	 *
	 * @param double $latitude
	 * @param double $longitude
	 * @return \Bolius\BoliusGeocodedk\Domain\Model\Municipality or false
	 */
	public function getMunicipality($lat, $lng) {
		if (is_numeric($lat) && is_numeric($lng)) {
			$municipal = $this->municipalityRepository->getMunicipality( doubleval($lat),  doubleval($lng));
			return $municipal;
		}
		return false;
	}

	/**
	 * action getMunicipalityByIp
	 *
	 * Returns the closest municipal to the given IP
	 * 
	 * @param string $ip
	 * @return \Bolius\BoliusGeocodedk\Domain\Model\Municipality or false
	 */
	public function getMunicipalityByIp($ip) {

		$infos = $this->geoCodeIp($ip);
		if (is_numeric($infos['lat']) && is_numeric($infos['lng']) && $infos['city'] != NULL) {
			$municipal = $this->municipalityRepository->getMunicipality($infos['lat'], $infos['lng']);
			return $municipal;;
		}
		return false;

	}

	public function geoCodeIp($ip) {
		// use geo ip if loaded
		if (ExtensionManagementUtility::isLoaded('geoip')) {
			require_once(  ExtensionManagementUtility::extPath('geoip').'/pi1/class.tx_geoip_pi1.php');
			$this->media = GeneralUtility::makeInstance('tx_geoip_pi1');

			// Use the database in the Resources folder
			$path = GeneralUtility::getFileAbsFileName("EXT:geocodedk/Resources/Private/Databases/GeoLiteCity.dat");
			// Initialize the Geoip Ext
			$this->media->init($path);
			// get all the infos
			$infos = $this->media->getGeoIP($ip);
			
			return $infos;;
		} 
		return false;
	}

}
?>
