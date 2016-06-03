<?php
App::uses('AppController', 'Controller');
/**
 * Camisas Controller
 *
 * @property Camisa $Camisa
 * @property PaginatorComponent $Paginator
 */
class CamisasController extends AppController {

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
		$this->Camisa->recursive = 0;
		$this->set('camisas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Camisa->exists($id)) {
			throw new NotFoundException(__('Invalid camisa'));
		}
		$options = array('conditions' => array('Camisa.' . $this->Camisa->primaryKey => $id));
		$this->set('camisa', $this->Camisa->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Camisa->create();
			if ($this->Camisa->save($this->request->data)) {
				$this->Session->setFlash(__('The camisa has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The camisa could not be saved. Please, try again.'));
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
		if (!$this->Camisa->exists($id)) {
			throw new NotFoundException(__('Invalid camisa'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Camisa->save($this->request->data)) {
				$this->Session->setFlash(__('The camisa has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The camisa could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Camisa.' . $this->Camisa->primaryKey => $id));
			$this->request->data = $this->Camisa->find('first', $options);
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
		$this->Camisa->id = $id;
		if (!$this->Camisa->exists()) {
			throw new NotFoundException(__('Invalid camisa'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Camisa->delete()) {
			$this->Session->setFlash(__('The camisa has been deleted.'));
		} else {
			$this->Session->setFlash(__('The camisa could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
