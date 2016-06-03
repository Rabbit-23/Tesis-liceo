<?php
App::uses('AppController', 'Controller');
/**
 * Docentes Controller
 *
 * @property Docente $Docente
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class DocentesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Docente->recursive = 0;
		$this->set('docentes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Docente->exists($id)) {
			throw new NotFoundException('Docente incorrecto', 'default', array('class' => 'alert alert-danger'));
		}
		$options = array('conditions' => array('Docente.' . $this->Docente->primaryKey => $id));
		$this->set('docente', $this->Docente->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($persona_id) {
		if ($this->request->is('post')) {
			$this->Docente->create();
			if ($this->Docente->save($this->request->data)) {
				$this->Session->setFlash('El docente se registro satisfactoriamente.', 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('No se pudo registrar. Verifique e Intente nuevamente', 'default', array('class' => 'alert alert-danger'));
			}
		}
		$personas = $this->Docente->Persona->find('list',array('conditions'=> array('Persona.id'=> $persona_id), 'fields'=>array('nombre_persona')));
		$materias = $this->Docente->Materia->find('list');
		$this->set(compact('personas', 'materias'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Docente->exists($id)) {
			throw new NotFoundException('Invalid docente', 'default', array('class' => 'alert alert-danger'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Docente->save($this->request->data)) {
				$this->Session->setFlash('The docente has been saved.', 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The docente could not be saved. Please, try again.', 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Docente.' . $this->Docente->primaryKey => $id));
			$this->request->data = $this->Docente->find('first', $options);
		}
		$personas = $this->Docente->Persona->find('list', array( 'fields'=> array('nombre_persona')));
		$materias = $this->Docente->Materia->find('list');
		$this->set(compact('personas', 'materias'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Docente->id = $id;
		if (!$this->Docente->exists()) {
			throw new NotFoundException('Invalid docente', 'default', array('class' => 'alert alert-danger'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Docente->delete()) {
			$this->Session->setFlash('The docente has been deleted.', 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash('The docente could not be deleted. Please, try again.', 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
