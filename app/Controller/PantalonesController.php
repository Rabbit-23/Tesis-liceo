<?php
App::uses('AppController', 'Controller');
/**
 * Pantalones Controller
 *
 * @property Pantalon $Pantalon
 * @property PaginatorComponent $Paginator
 */
class PantalonesController extends AppController {

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
		$this->Pantalon->recursive = 0;
		$this->set('pantalones', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Pantalon->exists($id)) {
			throw new NotFoundException(__('Invalid pantalon'));
		}
		$options = array('conditions' => array('Pantalon.' . $this->Pantalon->primaryKey => $id));
		$this->set('pantalon', $this->Pantalon->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Pantalon->create();
			if ($this->Pantalon->save($this->request->data)) {
				$this->Session->setFlash(__('The pantalon has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pantalon could not be saved. Please, try again.'));
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
		if (!$this->Pantalon->exists($id)) {
			throw new NotFoundException(__('Invalid pantalon'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Pantalon->save($this->request->data)) {
				$this->Session->setFlash(__('The pantalon has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pantalon could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Pantalon.' . $this->Pantalon->primaryKey => $id));
			$this->request->data = $this->Pantalon->find('first', $options);
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
		$this->Pantalon->id = $id;
		if (!$this->Pantalon->exists()) {
			throw new NotFoundException(__('Invalid pantalon'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Pantalon->delete()) {
			$this->Session->setFlash(__('The pantalon has been deleted.'));
		} else {
			$this->Session->setFlash(__('The pantalon could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
