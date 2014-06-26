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
class MunicipalityTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {
	/**
	 * @var \TYPO3\Geocodedk\Domain\Model\Municipality
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \TYPO3\Geocodedk\Domain\Model\Municipality();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getDistrictNumberReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->fixture->getDistrictNumber()
		);
	}

	/**
	 * @test
	 */
	public function setDistrictNumberForIntegerSetsDistrictNumber() {
		$this->fixture->setDistrictNumber(12);

		$this->assertSame(
			12,
			$this->fixture->getDistrictNumber()
		);
	}
	/**
	 * @test
	 */
	public function getDistrictNameReturnsInitialValueForString() {
		$this->assertSame(
			NULL,
			$this->fixture->getDistrictName()
		);
	}

	/**
	 * @test
	 */
	public function setDistrictNameForStringSetsDistrictName() {
		$this->fixture->setDistrictName('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getDistrictName()
		);
	}
	/**
	 * @test
	 */
	public function getMunicipalityNumberReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->fixture->getMunicipalityNumber()
		);
	}

	/**
	 * @test
	 */
	public function setMunicipalityNumberForIntegerSetsMunicipalityNumber() {
		$this->fixture->setMunicipalityNumber(12);

		$this->assertSame(
			12,
			$this->fixture->getMunicipalityNumber()
		);
	}
	/**
	 * @test
	 */
	public function getMunicipalityNameReturnsInitialValueForString() {
		$this->assertSame(
			NULL,
			$this->fixture->getMunicipalityName()
		);
	}

	/**
	 * @test
	 */
	public function setMunicipalityNameForStringSetsMunicipalityName() {
		$this->fixture->setMunicipalityName('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getMunicipalityName()
		);
	}
	/**
	 * @test
	 */
	public function getZipcodeReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->fixture->getZipcode()
		);
	}

	/**
	 * @test
	 */
	public function setZipcodeForIntegerSetsZipcode() {
		$this->fixture->setZipcode(12);

		$this->assertSame(
			12,
			$this->fixture->getZipcode()
		);
	}
	/**
	 * @test
	 */
	public function getCityNameReturnsInitialValueForString() {
		$this->assertSame(
			NULL,
			$this->fixture->getCityName()
		);
	}

	/**
	 * @test
	 */
	public function setCityNameForStringSetsCityName() {
		$this->fixture->setCityName('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getCityName()
		);
	}
	/**
	 * @test
	 */
	public function getLatitudeReturnsInitialValueForFloat() {
		$this->assertSame(
			0.0,
			$this->fixture->getLatitude()
		);
	}

	/**
	 * @test
	 */
	public function setLatitudeForFloatSetsLatitude() {
		$this->fixture->setLatitude(3.14159265);

		$this->assertSame(
			3.14159265,
			$this->fixture->getLatitude()
		);
	}
	/**
	 * @test
	 */
	public function getLongitudeReturnsInitialValueForFloat() {
		$this->assertSame(
			0.0,
			$this->fixture->getLongitude()
		);
	}

	/**
	 * @test
	 */
	public function setLongitudeForFloatSetsLongitude() {
		$this->fixture->setLongitude(3.14159265);

		$this->assertSame(
			3.14159265,
			$this->fixture->getLongitude()
		);
	}
}
?>