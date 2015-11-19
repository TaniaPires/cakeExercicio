<?php
/**
 * ReservaFixture
 *
 */
class ReservaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'data' => array('type' => 'date', 'null' => false, 'default' => null),
		'cliente_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'quarto_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'cancelado' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 1, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_reservas_clientes_idx' => array('column' => 'cliente_id', 'unique' => 0),
			'fk_reservas_quartos1_idx' => array('column' => 'quarto_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'data' => '2015-06-04',
			'cliente_id' => 1,
			'quarto_id' => 1,
			'cancelado' => 1
		),
	);

}
