<?php
App::uses('Quarto', 'Model');

/**
 * Quarto Test Case
 *
 */
class QuartoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.quarto',
		'app.reserva'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Quarto = ClassRegistry::init('Quarto');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Quarto);

		parent::tearDown();
	}

}
