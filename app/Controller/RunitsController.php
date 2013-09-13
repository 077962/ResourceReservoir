<?php
App::uses('AppController', 'Controller');
/**
 * Runits Controller
 *
 * @property Runit $Runit
 * @property PaginatorComponent $Paginator
 */
class RunitsController extends AppController {

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
		$this->Runit->recursive = 0;
		$this->set('runits', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Runit->exists($id)) {
			throw new NotFoundException(__('Invalid runit'));
		}
		$options = array('conditions' => array('Runit.' . $this->Runit->primaryKey => $id));
		$this->set('runit', $this->Runit->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Runit->create();
			if ($this->Runit->save($this->request->data)) {
				$this->Session->setFlash(__('The runit has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The runit could not be saved. Please, try again.'));
			}
		}
		$users = $this->Runit->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Runit->exists($id)) {
			throw new NotFoundException(__('Invalid runit'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Runit->save($this->request->data)) {
				$this->Session->setFlash(__('The runit has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The runit could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Runit.' . $this->Runit->primaryKey => $id));
			$this->request->data = $this->Runit->find('first', $options);
		}
		$users = $this->Runit->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Runit->id = $id;
		if (!$this->Runit->exists()) {
			throw new NotFoundException(__('Invalid runit'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Runit->delete()) {
			$this->Session->setFlash(__('The runit has been deleted.'));
		} else {
			$this->Session->setFlash(__('The runit could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
