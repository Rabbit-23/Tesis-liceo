<?php
App::uses('AppModel', 'Model');
/**
 * Estatus Model
 *
 * @property Persona $Persona
 */
class Estatus extends AppModel {

/**
 * Use database config
 *
 * @var string
 */
	public $useDbConfig = 'sistemacake';

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'estatus';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'estatus';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'estatus' => array(
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
		'Persona' => array(
			'className' => 'Persona',
			'foreignKey' => 'estatus_id',
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
