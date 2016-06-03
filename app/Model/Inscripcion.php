<?php
App::uses('AppModel', 'Model');
/**
 * Inscripcion Model
 *
 * @property Estudiante $Estudiante
 * @property Seccion $Seccion
 * @property Periodo $Periodo
 */
class Inscripcion extends AppModel {

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
	public $displayField = 'estudiante_id';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'estudiante_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'seccion_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'periodo_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'fecha_inscripcion' => array(
			'date' => array(
				'rule' => array('date'),
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
		'Estudiante' => array(
			'className' => 'Estudiante',
			'foreignKey' => 'estudiante_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Seccion' => array(
			'className' => 'Seccion',
			'foreignKey' => 'seccion_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Periodo' => array(
			'className' => 'Periodo',
			'foreignKey' => 'periodo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
