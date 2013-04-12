<?php
/**
 * AppointmentFormFixture
 *
 */
class AppointmentFormFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'service_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'full_name' => array('type' => 'integer', 'null' => false, 'default' => '11'),
		'address' => array('type' => 'integer', 'null' => false, 'default' => '10'),
		'email' => array('type' => 'integer', 'null' => false, 'default' => '11'),
		'phone' => array('type' => 'integer', 'null' => false, 'default' => '11'),
		'cell' => array('type' => 'integer', 'null' => false, 'default' => '10'),
		'fax' => array('type' => 'integer', 'null' => false, 'default' => '10'),
		'comment' => array('type' => 'integer', 'null' => false, 'default' => '10'),
		'col1' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'col1_type' => array('type' => 'integer', 'null' => true, 'default' => null),
		'col2' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'col2_type' => array('type' => 'integer', 'null' => true, 'default' => null),
		'col3' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'col3_type' => array('type' => 'integer', 'null' => true, 'default' => null),
		'col4' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'col4_type' => array('type' => 'integer', 'null' => true, 'default' => null),
		'col5' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'col5_type' => array('type' => 'integer', 'null' => true, 'default' => null),
		'col6' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'col6_type' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
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
			'service_id' => 1,
			'full_name' => 1,
			'address' => 1,
			'email' => 1,
			'phone' => 1,
			'cell' => 1,
			'fax' => 1,
			'comment' => 1,
			'col1' => 'Lorem ipsum dolor sit amet',
			'col1_type' => 1,
			'col2' => 'Lorem ipsum dolor sit amet',
			'col2_type' => 1,
			'col3' => 'Lorem ipsum dolor sit amet',
			'col3_type' => 1,
			'col4' => 'Lorem ipsum dolor sit amet',
			'col4_type' => 1,
			'col5' => 'Lorem ipsum dolor sit amet',
			'col5_type' => 1,
			'col6' => 'Lorem ipsum dolor sit amet',
			'col6_type' => 1
		),
	);

}
