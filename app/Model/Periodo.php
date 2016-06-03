<?php
App::uses('AppModel', 'Model');
/**
 * Periodo Model
 *
 * @property Inscripcion $Inscripcion
 * @property Nota $Nota
 * @property Pago $Pago
 */
class Periodo extends AppModel {

/**
 * Use database config
 *
 * @var string
 */
	public $useDbConfig = 'sistemacake';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'periodo';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'periodo' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
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
		'Inscripcion' => array(
			'className' => 'Inscripcion',
			'foreignKey' => 'periodo_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Nota' => array(
			'className' => 'Nota',
			'foreignKey' => 'periodo_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Pago' => array(
			'className' => 'Pago',
			'foreignKey' => 'periodo_id',
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
