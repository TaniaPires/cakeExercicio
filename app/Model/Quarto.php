<?php
App::uses('AppModel', 'Model');
/**
 * Quarto Model
 *
 * @property Reserva $Reserva
 */
class Quarto extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
    var $displayField = 'tipo';
	public $validate = array(
		'tipo' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'O campo tipo esta vazio',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Reserva' => array(
			'className' => 'Reserva',
			'foreignKey' => 'quarto_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
