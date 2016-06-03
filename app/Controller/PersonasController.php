<?php
App::uses('AppController', 'Controller');
Configure::write('Config.language', 'spa');  
/**
 * Personas Controller
 *
 * @property Persona $Persona
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class PersonasController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Persona->recursive = 2;
		$this->set('personas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Persona->exists($id)) {
			throw new NotFoundException('Invalid persona', 'default', array('class' => 'alert alert-danger'));
		}
		$options = array('conditions' => array('Persona.' . $this->Persona->primaryKey => $id));
		$this->set('persona', $this->Persona->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Persona->create();
			if ($this->Persona->save($this->request->data)) {
				$this->Session->setFlash('Termine de Completar los campos.', 'default', array('class' => 'alert alert-success'));
				return $this->redirect( array('controller' => 'estudiantes', 'action' => 'add',$this->Persona->id));
			} else {
				$this->Session->setFlash('No se pudo continuar con el Registro. Intente de nuevo', 'default', array('class' => 'alert alert-danger'));
			}
		}
		$estatuses = $this->Persona->Estatus->find('list');
		$this->set(compact('estatuses'));
	}
	public function add2() {
		if ($this->request->is('post')) {
			$this->Persona->create();
			if ($this->Persona->save($this->request->data)) {
				$this->Session->setFlash('Termine de Completar los campos.', 'default', array('class' => 'alert alert-success'));
				return $this->redirect( array('controller' => 'docentes', 'action' => 'add',$this->Persona->id));
			} else {
				$this->Session->setFlash('No se pudo continuar con el Registro. Intente de nuevo', 'default', array('class' => 'alert alert-danger'));
			}
		}
		$estatuses = $this->Persona->Estatus->find('list');
		$this->set(compact('estatuses'));
	}
	public function add3() {
		if ($this->request->is('post')) {
			$this->Persona->create();
			if ($this->Persona->save($this->request->data)) {
				$this->Session->setFlash('Termine de Completar los campos.', 'default', array('class' => 'alert alert-success'));
				return $this->redirect( array('controller' => 'representantes', 'action' => 'add',$this->Persona->id));
			} else {
				$this->Session->setFlash('No se pudo continuar con el Registro. Intente de nuevo', 'default', array('class' => 'alert alert-danger'));
			}
		}
		$estatuses = $this->Persona->Estatus->find('list');
		$this->set(compact('estatuses'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Persona->exists($id)) {
			throw new NotFoundException('Invalid persona', 'default', array('class' => 'alert alert-danger'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Persona->save($this->request->data)) {
				$this->Session->setFlash('The persona has been saved.', 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The persona could not be saved. Please, try again.', 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Persona.' . $this->Persona->primaryKey => $id));
			$this->request->data = $this->Persona->find('first', $options);
		}
		$estatuses = $this->Persona->Estatus->find('list');
		$this->set(compact('estatuses'));
	}
	public function find(){
		
		if ($this->request->is('post')) {
				$cedula = $this->request->data['Persona']['Cedula'];
			$doctor = $this->Persona->find('first',array(
				'conditions'=>array('Persona.cedula'=>$cedula),
				'recursive'=>-1,
			));
			if($doctor){
				$this->redirect(array('action'=>'view',$doctor['Persona']['id']));
			}else{
				$this->Session->setFlash(__('Cliente no encontrado'));
				$this->redirect(array('action'=>'find'));
			
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
		$this->Persona->id = $id;
		if (!$this->Persona->exists()) {
			throw new NotFoundException('Invalid persona', 'default', array('class' => 'alert alert-danger'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Persona->delete()) {
			$this->Session->setFlash('The persona has been deleted.', 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash('The persona could not be deleted. Please, try again.', 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
