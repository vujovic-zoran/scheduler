<?php
App::uses('Location', 'Model');

/**
 * Location Test Case
 *
 */
class LocationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.location',
		'app.country',
		'app.user',
		'app.group',
		'app.appointment',
		'app.schedule',
		'app.business',
		'app.business_category',
		'app.service',
		'app.appointment_form',
		'app.filled_form',
		'app.services_user',
		'app.time_break'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Location = ClassRegistry::init('Location');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Location);

		parent::tearDown();
	}

}
