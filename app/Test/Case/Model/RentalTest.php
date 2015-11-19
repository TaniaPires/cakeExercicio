<?php
App::uses('Rental', 'Model');

/**
 * Rental Test Case
 *
 */
class RentalTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.rental',
		'app.user',
		'app.delivery',
		'app.book'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Rental = ClassRegistry::init('Rental');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Rental);

		parent::tearDown();
	}

}
