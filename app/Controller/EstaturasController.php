<?php
App::uses('AppController', 'Controller');
/**
 * Estaturas Controller
 *
 * @property Estatura $Estatura
 * @property PaginatorComponent $Paginator
 */
class EstaturasController extends AppController {

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
		$this->Estatura->recursive = 0;
		$this->set('estaturas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Estatura->exists($id)) {
			throw new NotFoundException(__('Invalid estatura'));
		}
		$options = array('conditions' => array('Estatura.' . $this->Estatura->primaryKey => $id));
		$this->set('estatura', $this->Estatura->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Estatura->create();
			if ($this->Estatura->save($this->request->data)) {
				$this->Session->setFlash(__('The estatura has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The estatura could not be saved. Please, try again.'));
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
		if (!$this->Estatura->exists($id)) {
			throw new NotFoundException(__('Invalid estatura'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Estatura->save($this->request->data)) {
				$this->Session->setFlash(__('The estatura has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The estatura could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Estatura.' . $this->Estatura->primaryKey => $id));
			$this->request->data = $this->Estatura->find('first', $options);
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
		$this->Estatura->id = $id;
		if (!$this->Estatura->exists()) {
			throw new NotFoundException(__('Invalid estatura'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Estatura->delete()) {
			$this->Session->setFlash(__('The estatura has been deleted.'));
		} else {
			$this->Session->setFlash(__('The estatura could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
