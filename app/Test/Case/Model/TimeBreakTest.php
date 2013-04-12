<?php
App::uses('TimeBreak', 'Model');

/**
 * TimeBreak Test Case
 *
 */
class TimeBreakTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.time_break',
		'app.schedule',
		'app.business',
		'app.business_category',
		'app.service',
		'app.appointment_form',
		'app.filled_form',
		'app.appointment',
		'app.user',
		'app.services_user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TimeBreak = ClassRegistry::init('TimeBreak');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TimeBreak);

		parent::tearDown();
	}

}
