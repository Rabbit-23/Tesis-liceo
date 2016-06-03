<?php
App::uses('AppController', 'Controller');
/**
 * Pagos Controller
 *
 * @property Pago $Pago
 * @property PaginatorComponent $Paginator
 */
class PagosController extends AppController {

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
		$this->Pago->recursive = 0;
		$this->set('pagos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Pago->exists($id)) {
			throw new NotFoundException('Invalid pago', 'default', array('class' => 'alert alert-danger'));
		}
		$options = array('conditions' => array('Pago.' . $this->Pago->primaryKey => $id));
		$this->set('pago', $this->Pago->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($estudiante_id) {
		if ($this->request->is('post')) {
			$this->Pago->create();
			if ($this->Pago->save($this->request->data)) {
				$this->Session->setFlash('The pago has been saved.', 'default', array('class' => 'alert alert-success'));
				
				//return $this->redirect(array('action'=>'viewpdf',$this->Pago->id));
				return $this->redirect(array('controller'=>'estudiantes', 'action' => 'index'));
				debug($pago); exit();
			} else {
				$this->Session->setFlash('The pago could not be saved. Please, try again.', 'default', array('class' => 'alert alert-danger'));
			}
		}
		$periodos = $this->Pago->Periodo->find('list');
		$estudiantes = $this->Pago->Estudiante->find('list',array('conditions'=>array('Estudiante.id'=>$estudiante_id)));
		$meses = $this->Pago->Mes->find('list');
		$tipopagos = $this->Pago->Tipopago->find('list');
		$this->set(compact('periodos', 'estudiantes', 'meses', 'tipopagos'));
	}

public function viewpdf($id=null) {
    App::import('Vendor', 'Fpdf', array('file' => 'fpdf/rotation.php'));
    $this->layout = 'pdf'; //this will use the pdf.ctp layout
 
    $this->set('fpdf', new FPDF('P','mm','A4'));
    $resultado= $this->Pago->findAllById($id);

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
		if (!$this->Pago->exists($id)) {
			throw new NotFoundException('Invalid pago', 'default', array('class' => 'alert alert-danger'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Pago->save($this->request->data)) {
				$this->Session->setFlash('The pago has been saved.', 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The pago could not be saved. Please, try again.', 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Pago.' . $this->Pago->primaryKey => $id));
			$this->request->data = $this->Pago->find('first', $options);
		}
		$periodos = $this->Pago->Periodo->find('list');
		$estudiantes = $this->Pago->Estudiante->find('list');
		$meses = $this->Pago->Mes->find('list');
		$tipopagos = $this->Pago->Tipopago->find('list');
		$this->set(compact('periodos', 'estudiantes', 'meses', 'tipopagos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Pago->id = $id;
		if (!$this->Pago->exists()) {
			throw new NotFoundException('Invalid pago', 'default', array('class' => 'alert alert-danger'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Pago->delete()) {
			$this->Session->setFlash('The pago has been deleted.', 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash('The pago could not be deleted. Please, try again.', 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
