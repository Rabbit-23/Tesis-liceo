<?php
App::uses('AppController', 'Controller');
/**
 * Secciones Controller
 *
 * @property Seccion $Seccion
 * @property PaginatorComponent $Paginator
 */
class SeccionesController extends AppController {

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
		$this->Seccion->recursive = 2;
		$this->set('secciones', $this->Paginator->paginate());
		$secciones = $this->Seccion->find('all');
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Seccion->exists($id)) {
			throw new NotFoundException('Invalid seccion', 'default', array('class' => 'alert alert-danger'));
		}
		$options = array('conditions' => array('Seccion.' . $this->Seccion->primaryKey => $id));
		$this->set('seccion', $this->Seccion->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Seccion->create();
			if ($this->Seccion->save($this->request->data)) {
				$this->Session->setFlash('The seccion has been saved.', 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The seccion could not be saved. Please, try again.', 'default', array('class' => 'alert alert-danger'));
			}
		}
		$grados = $this->Seccion->Grado->find('list');
		$this->set(compact('grados'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Seccion->exists($id)) {
			throw new NotFoundException('Invalid seccion', 'default', array('class' => 'alert alert-danger'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Seccion->save($this->request->data)) {
				$this->Session->setFlash('The seccion has been saved.', 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The seccion could not be saved. Please, try again.', 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Seccion.' . $this->Seccion->primaryKey => $id));
			$this->request->data = $this->Seccion->find('first', $options);
		}
		$grados = $this->Seccion->Grado->find('list');
		$this->set(compact('grados'));
	}

	public function find(){
		
		if ($this->request->is('post')) {

			//debug($this->request->data); exit();

			$cedula = $this->request->data['Seccion']['Seccion'];
			$doctor = $this->Seccion->find('first',array(
				'conditions'=>array('Seccion.seccion'=>$cedula),
				'recursive'=>-1,
			));

			//debug($doctor); exit();

			if($doctor){
				$this->redirect(array('action'=>'view',$doctor['Seccion']['id']));
			}else{
				$this->Session->setFlash(__('Solicitante no encontrado'));
				//$this->redirect(array('action'=>'find'));
			}
			//debug($doctor);
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
		$this->Seccion->id = $id;
		if (!$this->Seccion->exists()) {
			throw new NotFoundException('Invalid seccion', 'default', array('class' => 'alert alert-danger'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Seccion->delete()) {
			$this->Session->setFlash('The seccion has been deleted.', 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash('The seccion could not be deleted. Please, try again.', 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
