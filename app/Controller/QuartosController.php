<?php
App::uses('AppController', 'Controller');
/**
 * Quartos Controller
 *
 * @property Quarto $Quarto
 * @property PaginatorComponent $Paginator
 */
class QuartosController extends AppController {

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
		$this->Quarto->recursive = 0;
		$this->set('quartos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Quarto->exists($id)) {
			throw new NotFoundException(__('Invalid quarto'));
		}
		$options = array('conditions' => array('Quarto.' . $this->Quarto->primaryKey => $id));
		$this->set('quarto', $this->Quarto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Quarto->create();
			if ($this->Quarto->save($this->request->data)) {
				$this->Session->setFlash(__('The quarto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The quarto could not be saved. Please, try again.'));
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
		if (!$this->Quarto->exists($id)) {
			throw new NotFoundException(__('Invalid quarto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Quarto->save($this->request->data)) {
				$this->Session->setFlash(__('The quarto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The quarto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Quarto.' . $this->Quarto->primaryKey => $id));
			$this->request->data = $this->Quarto->find('first', $options);
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
		$this->Quarto->id = $id;
		if (!$this->Quarto->exists()) {
			throw new NotFoundException(__('Invalid quarto'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Quarto->delete()) {
			$this->Session->setFlash(__('The quarto has been deleted.'));
		} else {
			$this->Session->setFlash(__('The quarto could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
