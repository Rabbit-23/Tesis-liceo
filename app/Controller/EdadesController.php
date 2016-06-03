<?php
App::uses('AppController', 'Controller');
/**
 * Edades Controller
 *
 * @property Edad $Edad
 * @property PaginatorComponent $Paginator
 */
class EdadesController extends AppController {

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
		$this->Edad->recursive = 0;
		$this->set('edades', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Edad->exists($id)) {
			throw new NotFoundException(__('Invalid edad'));
		}
		$options = array('conditions' => array('Edad.' . $this->Edad->primaryKey => $id));
		$this->set('edad', $this->Edad->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Edad->create();
			if ($this->Edad->save($this->request->data)) {
				$this->Session->setFlash(__('The edad has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The edad could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Edad->exists($id)) {
			throw new NotFoundException(__('Invalid edad'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Edad->save($this->request->data)) {
				$this->Session->setFlash(__('The edad has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The edad could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Edad.' . $this->Edad->primaryKey => $id));
			$this->request->data = $this->Edad->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Edad->id = $id;
		if (!$this->Edad->exists()) {
			throw new NotFoundException(__('Invalid edad'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Edad->delete()) {
			$this->Session->setFlash(__('The edad has been deleted.'));
		} else {
			$this->Session->setFlash(__('The edad could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
