<?php
App::uses('FilledForm', 'Model');

/**
 * FilledForm Test Case
 *
 */
class FilledFormTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.filled_form',
		'app.appointment_form',
		'app.service',
		'app.appointment',
		'app.schedule',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FilledForm = ClassRegistry::init('FilledForm');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FilledForm);

		parent::tearDown();
	}

}
