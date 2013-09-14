<?php
App::uses('AppController', 'Controller');
/**
 * Userinfos Controller
 *
 * @property Userinfo $Userinfo
 * @property PaginatorComponent $Paginator
 */
class UserinfosController extends AppController {

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
	public function login() {
		if(isset($this->data['User'])) {
			$UserId=$this->data['User']['username'];
			$password=$this->data['User']['password'];
			if($Userdata=$this->Userinfo->find('all', array('conditions' => array('username'=>"$UserId",'password'=>"$password")))) {			
				if($Userdata[0]['User']['is_active']) {				
					$this->Session->write('UserData',$Userdata);
					$this->redirect(array('controller' => 'users', 'action' => 'index'));
					exit;
				}
				else {
					$this->Session->setFlash(__('Your account is not active. Please contact your manager.'));
				}
			}
			else {
				$this->Session->setFlash(__('Invalid username and/or password. Please, try again.'));
			}
		}
	}
	
	public function logout() {
		$this->Session->delete('UserData');
		$this->redirect('/');
	}
	
	public function index() {
		$this->Userinfo->recursive = 0;
		$this->set('userinfos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Userinfo->exists($id)) {
			throw new NotFoundException(__('Invalid userinfo'));
		}
		$options = array('conditions' => array('Userinfo.' . $this->Userinfo->primaryKey => $id));
		$this->set('userinfo', $this->Userinfo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Userinfo->create();
			if ($this->Userinfo->save($this->request->data)) {
				$this->Session->setFlash(__('The userinfo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The userinfo could not be saved. Please, try again.'));
			}
		}
		$users = $this->Userinfo->User->find('list');
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
		if (!$this->Userinfo->exists($id)) {
			throw new NotFoundException(__('Invalid userinfo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Userinfo->save($this->request->data)) {
				$this->Session->setFlash(__('The userinfo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The userinfo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Userinfo.' . $this->Userinfo->primaryKey => $id));
			$this->request->data = $this->Userinfo->find('first', $options);
		}
		$users = $this->Userinfo->User->find('list');
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
		$this->Userinfo->id = $id;
		if (!$this->Userinfo->exists()) {
			throw new NotFoundException(__('Invalid userinfo'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Userinfo->delete()) {
			$this->Session->setFlash(__('The userinfo has been deleted.'));
		} else {
			$this->Session->setFlash(__('The userinfo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
