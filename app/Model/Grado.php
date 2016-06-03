<?php
App::uses('AppModel', 'Model');
/**
 * Grado Model
 *
 * @property Seccion $Seccion
 * @property Materia $Materia
 */
class Grado extends AppModel {

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
	public $displayField = 'grado';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'grado' => array(
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
		'Seccion' => array(
			'className' => 'Seccion',
			'foreignKey' => 'grado_id',
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


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Materia' => array(
			'className' => 'Materia',
			'joinTable' => 'grados_materias',
			'foreignKey' => 'grado_id',
			'associationForeignKey' => 'materia_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
