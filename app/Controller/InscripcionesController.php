<?php
App::uses('AppController', 'Controller');
Configure::write('Config.language', 'spa');  
/**
 * Inscripciones Controller
 *
 * @property Inscripcion $Inscripcion
 * @property PaginatorComponent $Paginator
 */
class InscripcionesController extends AppController {

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
		$this->Inscripcion->recursive = 2;
		$this->set('inscripciones', $this->Paginator->paginate());
		$secciones = $this->Inscripcion->Seccion->find('all');
		$personas = $this->Inscripcion->Estudiante->Persona->find('all');
		$this->set(compact('secciones','estudiantes','personas'));

	}
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Inscripcion->exists($id)) {
			throw new NotFoundException('Invalid inscripcion', 'default', array('class' => 'alert alert-danger'));
		}
		$options = array('conditions' => array('Inscripcion.' . $this->Inscripcion->primaryKey => $id));
		$this->set('inscripcion', $this->Inscripcion->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($estudiante_id) {
		if ($this->request->is('post')) {
			$this->Inscripcion->create();
			if ($this->Inscripcion->save($this->request->data)) {
				$this->Session->setFlash('The inscripcion has been saved.', 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action'=>'viewpdf',$this->Inscripcion->id));
			} else {
				$this->Session->setFlash('The inscripcion could not be saved. Please, try again.', 'default', array('class' => 'alert alert-danger'));
			}
		}
		$estudiantes = $this->Inscripcion->Estudiante->find('list',array('conditions'=>array('Estudiante.id'=>$estudiante_id)));
		$secciones = $this->Inscripcion->Seccion->find('list',array('fields' => array('id', 'nombre_completo')));
		$periodos = $this->Inscripcion->Periodo->find('list');
		$this->set(compact('estudiantes', 'secciones', 'periodos'));
	}
public function viewpdf($id=null) {
    App::import('Vendor', 'Fpdf', array('file' => 'fpdf/rotation.php'));
    $this->layout = 'pdf'; //this will use the pdf.ctp layout
 
    $this->set('fpdf', new FPDF('P','mm','A4'));

    $resultado= $this->Inscripcion->findAllById($id);

   $resultado1 = $resultado;
    $this->set('data', $resultado1);
 
    $this->render('pdf');
}
/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Inscripcion->exists($id)) {
			throw new NotFoundException('Invalid inscripcion', 'default', array('class' => 'alert alert-danger'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Inscripcion->save($this->request->data)) {
				$this->Session->setFlash('The inscripcion has been saved.', 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The inscripcion could not be saved. Please, try again.', 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Inscripcion.' . $this->Inscripcion->primaryKey => $id));
			$this->request->data = $this->Inscripcion->find('first', $options);
		}
		$estudiantes = $this->Inscripcion->Estudiante->find('list');
		$secciones = $this->Inscripcion->Seccion->find('list',array('fields' => array('id', 'nombre_completo')));
		$periodos = $this->Inscripcion->Periodo->find('list');
		$this->set(compact('estudiantes', 'secciones', 'periodos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Inscripcion->id = $id;
		if (!$this->Inscripcion->exists()) {
			throw new NotFoundException('Invalid inscripcion', 'default', array('class' => 'alert alert-danger'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Inscripcion->delete()) {
			$this->Session->setFlash('The inscripcion has been deleted.', 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash('The inscripcion could not be deleted. Please, try again.', 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
