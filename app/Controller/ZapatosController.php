<?php
App::uses('AppController', 'Controller');
/**
 * Zapatos Controller
 *
 * @property Zapato $Zapato
 * @property PaginatorComponent $Paginator
 */
class ZapatosController extends AppController {

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
		$this->Zapato->recursive = 0;
		$this->set('zapatos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Zapato->exists($id)) {
			throw new NotFoundException(__('Invalid zapato'));
		}
		$options = array('conditions' => array('Zapato.' . $this->Zapato->primaryKey => $id));
		$this->set('zapato', $this->Zapato->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Zapato->create();
			if ($this->Zapato->save($this->request->data)) {
				$this->Session->setFlash(__('The zapato has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The zapato could not be saved. Please, try again.'));
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
		if (!$this->Zapato->exists($id)) {
			throw new NotFoundException(__('Invalid zapato'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Zapato->save($this->request->data)) {
				$this->Session->setFlash(__('The zapato has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The zapato could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Zapato.' . $this->Zapato->primaryKey => $id));
			$this->request->data = $this->Zapato->find('first', $options);
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
		$this->Zapato->id = $id;
		if (!$this->Zapato->exists()) {
			throw new NotFoundException(__('Invalid zapato'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Zapato->delete()) {
			$this->Session->setFlash(__('The zapato has been deleted.'));
		} else {
			$this->Session->setFlash(__('The zapato could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
