<?php
namespace TYPO3\Geocodedk\Tests;
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
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class \TYPO3\Geocodedk\Domain\Model\Municipality.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Frederik Mogensen <frede@server-1.dk>
 */
class GeoServiceTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {
	/**
	 * @var \TYPO3\Geocodedk\Domain\Model\Municipality
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \TYPO3\Geocodedk\Domain\Service\GeoService();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function geoCodeIPToMunicipality() {
		$mockQuery = $this->getMock('TYPO3\Geocodedk\Domain\Model\Municipality');

		$mockRepository = $this->getMock('\TYPO3\Geocodedk\Domain\Repository\MunicipalityRepository');
		$mockRepository->expects($this->once())
			->method('getMunicipality')
			->will($this->returnValue($mockQuery));
		$this->inject($this->fixture, 'municipalityRepository', $mockRepository);

		// $result = $this->fixture->getMunicipalityByIp("87.58.254.111");
		$result = $this->fixture->getMunicipalityByIp("130.225.9.11");
	}

	/**
	 * @test
	 */
	public function geoCodeIP() {

		$result = $this->fixture->geoCodeIp("130.225.9.11");
		$expected = array (
			"ip" =>  "130.225.9.11",
			"countryCode" =>  "DNK",
			"countryName" =>  "Denmark",
			"region" => NULL,
			"city" =>  "Lyngby",
			"zip" => NULL,
			"lng" => 10.0426,
			"lat" => 56.17,
			"dmaCode" => NULL,
			"areaCode" => NULL
		);

		$this->assertEquals($expected, $result);

		$result = $this->fixture->geoCodeIp("87.58.254.111");
		$expected = array (
			"ip" =>  "87.58.254.111",
			"countryCode" =>  "DNK",
			"countryName" =>  "Denmark",
			"region" => NULL,
			"city" =>  NULL,
			"zip" => NULL,
			"lng" => 10,
			"lat" => 56,
			"dmaCode" => NULL,
			"areaCode" => NULL
		);
		$this->assertEquals($expected, $result);
	}

	/**
	 * @test
	 */
	public function geoCodeIPWithoutCityAccuracy() {
		$result = $this->fixture->getMunicipalityByIp("87.58.254.111");
		$this->assertEquals(false, $result);
	}
}
?>
