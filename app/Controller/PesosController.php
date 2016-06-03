<?php
App::uses('AppController', 'Controller');
/**
 * Pesos Controller
 *
 * @property Peso $Peso
 * @property PaginatorComponent $Paginator
 */
class PesosController extends AppController {

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
		$this->Peso->recursive = 0;
		$this->set('pesos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Peso->exists($id)) {
			throw new NotFoundException(__('Invalid peso'));
		}
		$options = array('conditions' => array('Peso.' . $this->Peso->primaryKey => $id));
		$this->set('peso', $this->Peso->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Peso->create();
			if ($this->Peso->save($this->request->data)) {
				$this->Session->setFlash(__('The peso has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The peso could not be saved. Please, try again.'));
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
		if (!$this->Peso->exists($id)) {
			throw new NotFoundException(__('Invalid peso'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Peso->save($this->request->data)) {
				$this->Session->setFlash(__('The peso has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The peso could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Peso.' . $this->Peso->primaryKey => $id));
			$this->request->data = $this->Peso->find('first', $options);
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
		$this->Peso->id = $id;
		if (!$this->Peso->exists()) {
			throw new NotFoundException(__('Invalid peso'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Peso->delete()) {
			$this->Session->setFlash(__('The peso has been deleted.'));
		} else {
			$this->Session->setFlash(__('The peso could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
