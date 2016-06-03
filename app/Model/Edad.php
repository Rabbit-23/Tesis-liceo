<?php
App::uses('AppModel', 'Model');
/**
 * Edad Model
 *
 * @property Estudiante $Estudiante
 */
class Edad extends AppModel {

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
	public $displayField = 'edad';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'edad' => array(
			'numeric' => array(
				'rule' => array('numeric'),
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
		'Estudiante' => array(
			'className' => 'Estudiante',
			'foreignKey' => 'edad_id',
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
