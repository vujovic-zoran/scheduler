<?php
App::uses('AppointmentForm', 'Model');

/**
 * AppointmentForm Test Case
 *
 */
class AppointmentFormTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.appointment_form',
		'app.service',
		'app.filled_form'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AppointmentForm = ClassRegistry::init('AppointmentForm');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AppointmentForm);

		parent::tearDown();
	}

}
