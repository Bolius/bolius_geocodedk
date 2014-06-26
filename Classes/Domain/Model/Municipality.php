<?php
namespace TYPO3\Geocodedk\Domain\Model;

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
class Municipality extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * districtNumber
	 *
	 * @var \integer
	 */
	protected $districtNumber;

	/**
	 * districtName
	 *
	 * @var \string
	 */
	protected $districtName;

	/**
	 * municipalityNumber
	 *
	 * @var \integer
	 * @validate NotEmpty
	 */
	protected $municipalityNumber;

	/**
	 * municipalityName
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $municipalityName;

	/**
	 * zipcode
	 *
	 * @var \integer
	 */
	protected $zipcode;

	/**
	 * cityName
	 *
	 * @var \string
	 */
	protected $cityName;

	/**
	 * latitude
	 *
	 * @var \float
	 */
	protected $latitude;

	/**
	 * longitude
	 *
	 * @var \float
	 */
	protected $longitude;

	/**
	 * distance
	 *
	 * @var \float
	 */
	protected $distance;

	/**
	 * Returns the districtNumber
	 *
	 * @return \integer $districtNumber
	 */
	public function getDistrictNumber() {
		return $this->districtNumber;
	}

	/**
	 * Sets the districtNumber
	 *
	 * @param \integer $districtNumber
	 * @return void
	 */
	public function setDistrictNumber($districtNumber) {
		$this->districtNumber = $districtNumber;
	}

	/**
	 * Returns the districtName
	 *
	 * @return \string $districtName
	 */
	public function getDistrictName() {
		return $this->districtName;
	}

	/**
	 * Sets the districtName
	 *
	 * @param \string $districtName
	 * @return void
	 */
	public function setDistrictName($districtName) {
		$this->districtName = $districtName;
	}

	/**
	 * Returns the municipalityNumber
	 *
	 * @return \integer $municipalityNumber
	 */
	public function getMunicipalityNumber() {
		return $this->municipalityNumber;
	}

	/**
	 * Sets the municipalityNumber
	 *
	 * @param \integer $municipalityNumber
	 * @return void
	 */
	public function setMunicipalityNumber($municipalityNumber) {
		$this->municipalityNumber = $municipalityNumber;
	}

	/**
	 * Returns the municipalityName
	 *
	 * @return \string $municipalityName
	 */
	public function getMunicipalityName() {
		return $this->municipalityName;
	}

	/**
	 * Sets the municipalityName
	 *
	 * @param \string $municipalityName
	 * @return void
	 */
	public function setMunicipalityName($municipalityName) {
		$this->municipalityName = $municipalityName;
	}

	/**
	 * Returns the zipcode
	 *
	 * @return \integer $zipcode
	 */
	public function getZipcode() {
		return $this->zipcode;
	}

	/**
	 * Sets the zipcode
	 *
	 * @param \integer $zipcode
	 * @return void
	 */
	public function setZipcode($zipcode) {
		$this->zipcode = $zipcode;
	}

	/**
	 * Returns the cityName
	 *
	 * @return \string $cityName
	 */
	public function getCityName() {
		return $this->cityName;
	}

	/**
	 * Sets the cityName
	 *
	 * @param \string $cityName
	 * @return void
	 */
	public function setCityName($cityName) {
		$this->cityName = $cityName;
	}

	/**
	 * Returns the latitude
	 *
	 * @return \float $latitude
	 */
	public function getLatitude() {
		return $this->latitude;
	}

	/**
	 * Sets the latitude
	 *
	 * @param \float $latitude
	 * @return void
	 */
	public function setLatitude($latitude) {
		$this->latitude = $latitude;
	}

	/**
	 * Returns the longitude
	 *
	 * @return \float $longitude
	 */
	public function getLongitude() {
		return $this->longitude;
	}

	/**
	 * Sets the longitude
	 *
	 * @param \float $longitude
	 * @return void
	 */
	public function setLongitude($longitude) {
		$this->longitude = $longitude;
	}

	/**
	 * Returns the distance
	 *
	 * @return \float $distance
	 */
	public function getDistance() {
		return $this->distance;
	}

	/**
	 * Sets the distance
	 *
	 * @param \float $distance
	 * @return void
	 */
	public function setDistance($distance) {
		$this->distance = $distance;
	}

}
?>
