<?php
App::uses('AppController', 'Controller');
/**
 * Meses Controller
 *
 * @property Mes $Mes
 * @property PaginatorComponent $Paginator
 */
class MesesController extends AppController {

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
		$this->Mes->recursive = 0;
		$this->set('meses', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Mes->exists($id)) {
			throw new NotFoundException(__('Invalid mes'));
		}
		$options = array('conditions' => array('Mes.' . $this->Mes->primaryKey => $id));
		$this->set('mes', $this->Mes->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Mes->create();
			if ($this->Mes->save($this->request->data)) {
				$this->Session->setFlash(__('The mes has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mes could not be saved. Please, try again.'));
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
		if (!$this->Mes->exists($id)) {
			throw new NotFoundException(__('Invalid mes'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Mes->save($this->request->data)) {
				$this->Session->setFlash(__('The mes has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mes could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Mes.' . $this->Mes->primaryKey => $id));
			$this->request->data = $this->Mes->find('first', $options);
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
		$this->Mes->id = $id;
		if (!$this->Mes->exists()) {
			throw new NotFoundException(__('Invalid mes'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Mes->delete()) {
			$this->Session->setFlash(__('The mes has been deleted.'));
		} else {
			$this->Session->setFlash(__('The mes could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
