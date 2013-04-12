<?php
App::uses('ServicesUser', 'Model');

/**
 * ServicesUser Test Case
 *
 */
class ServicesUserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.services_user',
		'app.service',
		'app.business',
		'app.business_category',
		'app.schedule',
		'app.user',
		'app.appointment',
		'app.filled_form',
		'app.appointment_form',
		'app.time_break'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ServicesUser = ClassRegistry::init('ServicesUser');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ServicesUser);

		parent::tearDown();
	}

}
