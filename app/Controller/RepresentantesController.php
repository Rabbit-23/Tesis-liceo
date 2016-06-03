<?php
App::uses('AppController', 'Controller');
/**
 * Representantes Controller
 *
 * @property Representante $Representante
 * @property PaginatorComponent $Paginator
 */
class RepresentantesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Representante->recursive = 2;
		$this->set('representantes', $this->Paginator->paginate());
		$personas = $this->Representante->Estudiante->Persona->find('all');
		$this->set(compact('estudiantes', 'personas'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Representante->exists($id)) {
			throw new NotFoundException('Invalid representante', 'default', array('class' => 'alert alert-danger'));
		}
		$options = array('conditions' => array('Representante.' . $this->Representante->primaryKey => $id));
		//debug ($options); exit();
		
		$this->set('representante', $this->Representante->find('first', $options));
		

		//$resultado= $this->Solicitante->findAllById($id);


	}

/**
 * add method
 *
 * @return void
 */
	public function add($persona_id) {
		if ($this->request->is('post')) {
			$this->Representante->create();
			if ($this->Representante->save($this->request->data)) {
				$this->Session->setFlash('El representante se registro satisfactoriamente.', 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('No se pudo registrar. Verifique e Intente nuevamente', 'default', array('class' => 'alert alert-danger'));
			}
		}
		$estudiantes = $this->Representante->Estudiante->find('list');
		$personas = $this->Representante->Persona->find('list',array('conditions'=>array('Persona.id'=>$persona_id)));
		$this->set(compact('estudiantes', 'personas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Representante->exists($id)) {
			throw new NotFoundException('Invalid representante', 'default', array('class' => 'alert alert-danger'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Representante->save($this->request->data)) {
				$this->Session->setFlash('The representante has been saved.', 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The representante could not be saved. Please, try again.', 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Representante.' . $this->Representante->primaryKey => $id));
			$this->request->data = $this->Representante->find('first', $options);
		}
		$estudiantes = $this->Representante->Estudiante->find('list');
		
		$this->set(compact('estudiantes', 'personas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Representante->id = $id;
		if (!$this->Representante->exists()) {
			throw new NotFoundException('Invalid representante', 'default', array('class' => 'alert alert-danger'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Representante->delete()) {
			$this->Session->setFlash('The representante has been deleted.', 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash('The representante could not be deleted. Please, try again.', 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
