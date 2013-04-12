<?php
App::uses('BusinessCategory', 'Model');

/**
 * BusinessCategory Test Case
 *
 */
class BusinessCategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.business_category',
		'app.business'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->BusinessCategory = ClassRegistry::init('BusinessCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BusinessCategory);

		parent::tearDown();
	}

}
