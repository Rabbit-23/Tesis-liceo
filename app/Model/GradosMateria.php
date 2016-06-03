<?php
App::uses('AppModel', 'Model');
/**
 * GradosMateria Model
 *
 * @property Grado $Grado
 * @property Materia $Materia
 */
class GradosMateria extends AppModel {

/**
 * Use database config
 *
 * @var string
 */
	public $useDbConfig = 'sistemacake';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'grado_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'materia_id' => array(
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
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Grado' => array(
			'className' => 'Grado',
			'foreignKey' => 'grado_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Materia' => array(
			'className' => 'Materia',
			'foreignKey' => 'materia_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
