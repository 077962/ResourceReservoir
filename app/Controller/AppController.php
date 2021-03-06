<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	public $components = array('DebugKit.Toolbar', 'Session');
	
	function beforeFilter() {
		if(!$this->Session->read('UserData')) {
			if($this->params['controller'] != 'userinfos' && $this->params['action'] != 'login') {
				$this->redirect('/');
			}
		}
		else
		{
			$userData = $this->Session->read('UserData');
			$roleID = $userData[0]['User']['role_id'];
			$this->loadModel('Roles');
			$roles = $this->Roles->find('all', array('conditions' => array('Roles.id' => "$roleID")));			
			$roleSF = $roles[0]['Roles']['short_form'];
			$this->set('RoleSF', $roleSF);
			//admin check
			if(($this->params['controller'] == 'roles' || $this->params['controller'] == 'verticals' || $this->params['controller'] == 'skills' || $this->params['controller'] == 'runits') && ($roleSF != 'ADM'))
			{
				$this->Session->setFlash(__('You do not have access for managing Roles.'));
				$this->redirect(array('controller' => 'userinfos', 'action' => 'logout'));
			}
		}
	}
}
