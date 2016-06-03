<?php
App::uses('AppController', 'Controller');
/**
 * Notas Controller
 *
 * @property Nota $Nota
 * @property PaginatorComponent $Paginator
 */
class NotasController extends AppController {

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
		$this->Nota->recursive = 0;
		$this->set('notas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Nota->exists($id)) {
			throw new NotFoundException('Invalid nota', 'default', array('class' => 'alert alert-danger'));
		}
		$options = array('conditions' => array('Nota.' . $this->Nota->primaryKey => $id));
		$this->set('nota', $this->Nota->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($estudiante_id) {
		if ($this->request->is('post')) {
			$this->Nota->create();
			if ($this->Nota->save($this->request->data)) {
				$this->Session->setFlash('The nota has been saved.', 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The nota could not be saved. Please, try again.', 'default', array('class' => 'alert alert-danger'));
			}
		}
		$estudiantes = $this->Nota->Estudiante->find('list');
		$periodos = $this->Nota->Periodo->find('list');
		$materias = $this->Nota->Materia->find('list');
		$secciones = $this->Nota->Seccion->find('list', array('fields' => array('id', 'nombre_completo')));
		$this->set(compact('estudiantes', 'periodos', 'materias', 'secciones'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Nota->exists($id)) {
			throw new NotFoundException('Invalid nota', 'default', array('class' => 'alert alert-danger'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Nota->save($this->request->data)) {
				$this->Session->setFlash('The nota has been saved.', 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The nota could not be saved. Please, try again.', 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Nota.' . $this->Nota->primaryKey => $id));
			$this->request->data = $this->Nota->find('first', $options);
		}
		$estudiantes = $this->Nota->Estudiante->find('list');
		$periodos = $this->Nota->Periodo->find('list');
		$materias = $this->Nota->Materia->find('list');
		$secciones = $this->Nota->Seccion->find('list');
		$this->set(compact('estudiantes', 'periodos', 'materias', 'secciones'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Nota->id = $id;
		if (!$this->Nota->exists()) {
			throw new NotFoundException('Invalid nota', 'default', array('class' => 'alert alert-danger'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Nota->delete()) {
			$this->Session->setFlash('The nota has been deleted.', 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash('The nota could not be deleted. Please, try again.', 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
