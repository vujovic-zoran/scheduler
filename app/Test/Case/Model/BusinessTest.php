<?php
App::uses('Business', 'Model');

/**
 * Business Test Case
 *
 */
class BusinessTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.business',
		'app.business_category',
		'app.schedule',
		'app.service'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Business = ClassRegistry::init('Business');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Business);

		parent::tearDown();
	}

}
