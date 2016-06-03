<?php
App::uses('AppController', 'Controller');
/**
 * Materias Controller
 *
 * @property Materia $Materia
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class MateriasController extends AppController {

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
		$this->Materia->recursive = 0;
		$this->set('materias', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Materia->exists($id)) {
			throw new NotFoundException('Invalid materia', 'default', array('class' => 'alert alert-danger'));
		}
		$options = array('conditions' => array('Materia.' . $this->Materia->primaryKey => $id));
		$this->set('materia', $this->Materia->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Materia->create();
			if ($this->Materia->save($this->request->data)) {
				$this->Session->setFlash('The materia has been saved.', 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The materia could not be saved. Please, try again.', 'default', array('class' => 'alert alert-danger'));
			}
		}
		$grados = $this->Materia->Grado->find('list');
		$docentes = $this->Materia->Docente->find('list');
		$this->set(compact('grados', 'docentes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Materia->exists($id)) {
			throw new NotFoundException('Invalid materia', 'default', array('class' => 'alert alert-danger'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Materia->save($this->request->data)) {
				$this->Session->setFlash('The materia has been saved.', 'default', array('class' => 'alert alert-danger'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The materia could not be saved. Please, try again.', 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Materia.' . $this->Materia->primaryKey => $id));
			$this->request->data = $this->Materia->find('first', $options);
		}
		$grados = $this->Materia->Grado->find('list');
		$docentes = $this->Materia->Docente->find('list');
		$this->set(compact('grados', 'docentes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Materia->id = $id;
		if (!$this->Materia->exists()) {
			throw new NotFoundException('Invalid materia', 'default', array('class' => 'alert alert-danger'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Materia->delete()) {
			$this->Session->setFlash('The materia has been deleted.', 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash('The materia could not be deleted. Please, try again.', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
