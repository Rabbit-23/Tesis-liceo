<?php
App::uses('AppController', 'Controller');
/**
 * Periodos Controller
 *
 * @property Periodo $Periodo
 * @property PaginatorComponent $Paginator
 */
class PeriodosController extends AppController {

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
		$this->Periodo->recursive = 0;
		$this->set('periodos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Periodo->exists($id)) {
			throw new NotFoundException('Invalid periodo', 'default', array('class' => 'alert alert-danger'));
		}
		$options = array('conditions' => array('Periodo.' . $this->Periodo->primaryKey => $id));
		$this->set('periodo', $this->Periodo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Periodo->create();
			if ($this->Periodo->save($this->request->data)) {
				$this->Session->setFlash('The periodo has been saved.', 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The periodo could not be saved. Please, try again.', 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->Periodo->exists($id)) {
			throw new NotFoundException('Invalid periodo', 'default', array('class' => 'alert alert-danger'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Periodo->save($this->request->data)) {
				$this->Session->setFlash('The periodo has been saved.', 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The periodo could not be saved. Please, try again.', 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Periodo.' . $this->Periodo->primaryKey => $id));
			$this->request->data = $this->Periodo->find('first', $options);
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
		$this->Periodo->id = $id;
		if (!$this->Periodo->exists()) {
			throw new NotFoundException('Invalid periodo', 'default', array('class' => 'alert alert-danger'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Periodo->delete()) {
			$this->Session->setFlash('The periodo has been deleted.', 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash('The periodo could not be deleted. Please, try again.', 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
