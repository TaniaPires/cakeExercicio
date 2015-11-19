<?php
App::uses('AppController', 'Controller');
/**
 * Rentals Controller
 *
 * @property Rental $Rental
 * @property PaginatorComponent $Paginator
 */
class RentalsController extends AppController {

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
		$this->Rental->recursive = 0;
		$this->set('rentals', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Rental->exists($id)) {
			throw new NotFoundException(__('Invalid rental'));
		}
		$options = array('conditions' => array('Rental.' . $this->Rental->primaryKey => $id));
		$this->set('rental', $this->Rental->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Rental->create();
			if ($this->Rental->save($this->request->data)) {
				$this->Session->setFlash(__('The rental has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rental could not be saved. Please, try again.'));
			}
		}
		$users = $this->Rental->User->find('list');
		$books = $this->Rental->Book->find('list');
		$this->set(compact('users', 'books'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Rental->exists($id)) {
			throw new NotFoundException(__('Invalid rental'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Rental->save($this->request->data)) {
				$this->Session->setFlash(__('The rental has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rental could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Rental.' . $this->Rental->primaryKey => $id));
			$this->request->data = $this->Rental->find('first', $options);
		}
		$users = $this->Rental->User->find('list');
		$books = $this->Rental->Book->find('list');
		$this->set(compact('users', 'books'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Rental->id = $id;
		if (!$this->Rental->exists()) {
			throw new NotFoundException(__('Invalid rental'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Rental->delete()) {
			$this->Session->setFlash(__('The rental has been deleted.'));
		} else {
			$this->Session->setFlash(__('The rental could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
