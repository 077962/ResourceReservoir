<?php
App::uses('AppController', 'Controller');
/**
 * Projectstatuses Controller
 *
 * @property Projectstatus $Projectstatus
 * @property PaginatorComponent $Paginator
 */
class ProjectstatusesController extends AppController {

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
		$this->Projectstatus->recursive = 0;
		$this->set('projectstatuses', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Projectstatus->exists($id)) {
			throw new NotFoundException(__('Invalid projectstatus'));
		}
		$options = array('conditions' => array('Projectstatus.' . $this->Projectstatus->primaryKey => $id));
		$this->set('projectstatus', $this->Projectstatus->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Projectstatus->create();
			if ($this->Projectstatus->save($this->request->data)) {
				$this->Session->setFlash(__('The projectstatus has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The projectstatus could not be saved. Please, try again.'));
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
		if (!$this->Projectstatus->exists($id)) {
			throw new NotFoundException(__('Invalid projectstatus'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Projectstatus->save($this->request->data)) {
				$this->Session->setFlash(__('The projectstatus has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The projectstatus could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Projectstatus.' . $this->Projectstatus->primaryKey => $id));
			$this->request->data = $this->Projectstatus->find('first', $options);
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
		$this->Projectstatus->id = $id;
		if (!$this->Projectstatus->exists()) {
			throw new NotFoundException(__('Invalid projectstatus'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Projectstatus->delete()) {
			$this->Session->setFlash(__('The projectstatus has been deleted.'));
		} else {
			$this->Session->setFlash(__('The projectstatus could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
