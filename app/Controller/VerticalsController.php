<?php
App::uses('AppController', 'Controller');
/**
 * Verticals Controller
 *
 * @property Vertical $Vertical
 * @property PaginatorComponent $Paginator
 */
class VerticalsController extends AppController {

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
		$this->Vertical->recursive = 0;
		$this->set('verticals', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Vertical->exists($id)) {
			throw new NotFoundException(__('Invalid vertical'));
		}
		$options = array('conditions' => array('Vertical.' . $this->Vertical->primaryKey => $id));
		$this->set('vertical', $this->Vertical->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Vertical->create();
			if ($this->Vertical->save($this->request->data)) {
				$this->Session->setFlash(__('The vertical has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vertical could not be saved. Please, try again.'));
			}
		}
		$users = $this->Vertical->User->find('list');
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
		if (!$this->Vertical->exists($id)) {
			throw new NotFoundException(__('Invalid vertical'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Vertical->save($this->request->data)) {
				$this->Session->setFlash(__('The vertical has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vertical could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Vertical.' . $this->Vertical->primaryKey => $id));
			$this->request->data = $this->Vertical->find('first', $options);
		}
		$users = $this->Vertical->User->find('list');
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
		$this->Vertical->id = $id;
		if (!$this->Vertical->exists()) {
			throw new NotFoundException(__('Invalid vertical'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Vertical->delete()) {
			$this->Session->setFlash(__('The vertical has been deleted.'));
		} else {
			$this->Session->setFlash(__('The vertical could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
