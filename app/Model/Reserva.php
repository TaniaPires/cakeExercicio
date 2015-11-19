<?php
App::uses('AppModel', 'Model');
/**
 * Reserva Model
 *
 * @property Cliente $Cliente
 * @property Quarto $Quarto
 */
class Reserva extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'data' => array(
			'date' => array(
				'rule' => array('date'),
				'message' => 'tens que prencher o campo data',
				
			),
		),
		'cliente_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'somente numeros',
				
			),
		),
		'quarto_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'somente numeros',
				
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Cliente' => array(
			'className' => 'Cliente',
			'foreignKey' => 'cliente_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Quarto' => array(
			'className' => 'Quarto',
			'foreignKey' => 'quarto_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
