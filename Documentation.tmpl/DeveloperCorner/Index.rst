.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../Includes.txt


.. _developer:

Developer Corner
================

Target group: **Developers**

Use this section for providing code example or any useful information code wise.

.. _developer-hooks:

Hooks
-----

Possible hooks example

.. _developer-api:

API
---

Inject repository:

..	/**
..	 * municipalityRepository
..	 *
..	 * @var \TYPO3\Geocodedk\Domain\Repository\MunicipalityRepository
..	 * @inject
..	 */
..	protected $municipalityRepository;

Get municipal by latitude longitude:

..	$municipal = $this->municipalityRepository->getMunicipality(56.858, 9.7027);
..  if ($municipal) {
..		return json_encode(array(
..			'city' => $municipal->getCityName(),
..			'distance' => $municipal->getDistance()
..		));
..	}
