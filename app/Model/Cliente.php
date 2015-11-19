<?php
App::uses('AppModel', 'Model');
/**
 * Cliente Model
 *
 * @property Reserva $Reserva
 */
class Cliente extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
    var $displayField = 'nome';
	public $validate = array(
		'nome' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'o campono nome esta vazio',
				
			),
		),
		'email' => array(
			'email' => array(
				'rule' => array('email'),
				'message' => 'o email introduzido e invalido',
				
			),
		),
		'celular' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'o campo celular vazio',
				
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
			'foreignKey' => 'cliente_id',
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
