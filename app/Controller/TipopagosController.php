<?php
App::uses('AppController', 'Controller');
/**
 * Tipopagos Controller
 *
 * @property Tipopago $Tipopago
 * @property PaginatorComponent $Paginator
 */
class TipopagosController extends AppController {

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
		$this->Tipopago->recursive = 0;
		$this->set('tipopagos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Tipopago->exists($id)) {
			throw new NotFoundException('Invalid tipopago', 'default', array('class' => 'alert alert-danger'));
		}
		$options = array('conditions' => array('Tipopago.' . $this->Tipopago->primaryKey => $id));
		$this->set('tipopago', $this->Tipopago->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Tipopago->create();
			if ($this->Tipopago->save($this->request->data)) {
				$this->Session->setFlash('The tipopago has been saved.', 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The tipopago could not be saved. Please, try again.', 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->Tipopago->exists($id)) {
			throw new NotFoundException(__('Invalid tipopago'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Tipopago->save($this->request->data)) {
				$this->Session->setFlash('The tipopago has been saved.', 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The tipopago could not be saved. Please, try again.', 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Tipopago.' . $this->Tipopago->primaryKey => $id));
			$this->request->data = $this->Tipopago->find('first', $options);
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
		$this->Tipopago->id = $id;
		if (!$this->Tipopago->exists()) {
			throw new NotFoundException('Invalid tipopago', 'default', array('class' => 'alert alert-danger'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Tipopago->delete()) {
			$this->Session->setFlash('The tipopago has been deleted.', 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash('The tipopago could not be deleted. Please, try again.', 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
