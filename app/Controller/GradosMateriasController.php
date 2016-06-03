<?php
App::uses('AppController', 'Controller');
/**
 * GradosMaterias Controller
 *
 * @property GradosMateria $GradosMateria
 * @property PaginatorComponent $Paginator
 */
class GradosMateriasController extends AppController {

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
		$this->GradosMateria->recursive = 0;
		$this->set('gradosMaterias', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->GradosMateria->exists($id)) {
			throw new NotFoundException(__('Invalid grados materia'));
		}
		$options = array('conditions' => array('GradosMateria.' . $this->GradosMateria->primaryKey => $id));
		$this->set('gradosMateria', $this->GradosMateria->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->GradosMateria->create();
			if ($this->GradosMateria->save($this->request->data)) {
				$this->Session->setFlash(__('The grados materia has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The grados materia could not be saved. Please, try again.'));
			}
		}
		$grados = $this->GradosMateria->Grado->find('list');
		$materias = $this->GradosMateria->Materium->find('list');
		$this->set(compact('grados', 'materias'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->GradosMateria->exists($id)) {
			throw new NotFoundException(__('Invalid grados materia'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->GradosMateria->save($this->request->data)) {
				$this->Session->setFlash(__('The grados materia has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The grados materia could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('GradosMateria.' . $this->GradosMateria->primaryKey => $id));
			$this->request->data = $this->GradosMateria->find('first', $options);
		}
		$grados = $this->GradosMateria->Grado->find('list');
		$materias = $this->GradosMateria->Materium->find('list');
		$this->set(compact('grados', 'materias'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->GradosMateria->id = $id;
		if (!$this->GradosMateria->exists()) {
			throw new NotFoundException(__('Invalid grados materia'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->GradosMateria->delete()) {
			$this->Session->setFlash(__('The grados materia has been deleted.'));
		} else {
			$this->Session->setFlash(__('The grados materia could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
