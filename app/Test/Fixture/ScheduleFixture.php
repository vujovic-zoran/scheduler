<?php
/**
 * ScheduleFixture
 *
 */
class ScheduleFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'business_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'user_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index', 'comment' => 'staff id'),
		'service_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'name' => array('type' => 'integer', 'null' => false, 'default' => null),
		'mon' => array('type' => 'string', 'null' => false, 'default' => '9:00-17:00', 'length' => 10, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'tue' => array('type' => 'string', 'null' => false, 'default' => '9:00-17:00', 'length' => 10, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'wed' => array('type' => 'string', 'null' => false, 'default' => '9:00-17:00', 'length' => 10, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'thu' => array('type' => 'string', 'null' => false, 'default' => '9:00-17:00', 'length' => 10, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'fri' => array('type' => 'string', 'null' => false, 'default' => '9:00-17:00', 'length' => 10, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'sat' => array('type' => 'string', 'null' => false, 'default' => 'none', 'length' => 10, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'sun' => array('type' => 'string', 'null' => false, 'default' => 'none', 'length' => 10, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'business_id' => array('column' => 'business_id', 'unique' => 0),
			'user_id' => array('column' => 'user_id', 'unique' => 0),
			'service_id' => array('column' => 'service_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_bin', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'business_id' => 1,
			'user_id' => 1,
			'service_id' => 1,
			'name' => 1,
			'mon' => 'Lorem ip',
			'tue' => 'Lorem ip',
			'wed' => 'Lorem ip',
			'thu' => 'Lorem ip',
			'fri' => 'Lorem ip',
			'sat' => 'Lorem ip',
			'sun' => 'Lorem ip'
		),
	);

}
