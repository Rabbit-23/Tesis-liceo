<?php
App::uses('AppController', 'Controller');
/**
 * Estudiantes Controller
 *
 * @property Estudiante $Estudiante
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class EstudiantesController extends AppController {

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
		$this->Estudiante->recursive = 2;
		$this->set('estudiantes',$this->Paginator->paginate());
		
		
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Estudiante->exists($id)) {
			throw new NotFoundException('Estudiante incorrecto', 'default', array('class' => 'alert alert-danger'));
		}
		$options = array('conditions' => array('Estudiante.' . $this->Estudiante->primaryKey => $id));
		
		$this->set('estudiante', $this->Estudiante->find('first', $options));
	}

/**
 * add method
 *'fields' => array('id', 'nombre_persona'
 * @return void
 */
		public function add($persona_id) {
		if ($this->request->is('post')) {
			$this->Estudiante->create();
			if ($this->Estudiante->save($this->request->data)) {
				$this->Session->setFlash('El estudiante se registro satisfactoriamente.', 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('No se pudo registrar. Verifique e Intente nuevamente', 'default', array('class' => 'alert alert-danger'));
			}
		}
		$personas = $this->Estudiante->Persona->find('list',array('conditions'=> array('Persona.id'=> $persona_id), 'fields'=>array('nombre_persona')));
		$this->set(compact('personas'));
	}

/**
 * edit method 
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Estudiante->exists($id)) {
			throw new NotFoundException(__('Invalid estudiante'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Estudiante->save($this->request->data)) {
				$this->Session->setFlash(__('The estudiante has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The estudiante could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Estudiante.' . $this->Estudiante->primaryKey => $id));
			$this->request->data = $this->Estudiante->find('first', $options);
		}
		$personas = $this->Estudiante->Persona->find('list', array( 'fields'=>array('nombre_persona')));
		$this->set(compact('personas'));
	}
	public function viewpdf($id=null) {
    App::import('Vendor', 'Fpdf', array('file' => 'fpdf/fpdf.php'));
    $this->layout = 'pdf'; //this will use the pdf.ctp layout
 
    $this->set('fpdf', new FPDF('P','mm','A4'));
    $resultado= $this->Estudiante->findAllById($id);

   $resultado1 = $resultado;
    $this->set('data', $resultado1);
    $this->render('pdf');
}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Estudiante->id = $id;
		if (!$this->Estudiante->exists()) {
			throw new NotFoundException(__('Invalid estudiante'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Estudiante->delete()) {
			$this->Session->setFlash(__('The estudiante has been deleted.'));
		} else {
			$this->Session->setFlash(__('The estudiante could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
