<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

	function beforeFilter() {
		parent::beforeFilter();
	}

/**
	 * Logs in a User
	 */
	function login() {
		//$salt = Configure::read('Security.salt');
		//echo md5('password'.$salt);

		// redirect user if already logged in
		if( $this->Session->check('User') ) {
			$this->redirect(array('controller'=>'dashboard','action'=>'index','admin'=>true));
		}

		if(!empty($this->data)) {
			// set the form data to enable validation
			$this->User->set( $this->data );
			// see if the data validates
			if($this->User->validates()) {
				// check user is valid
				$result = $this->User->check_user_data($this->data);

				if( $result !== FALSE ) {
					// update login time
					$this->User->id = $result['User']['id'];
					$this->User->saveField('last_login',date("Y-m-d H:i:s"));
					// save to session
					$this->Session->write('User',$result);
					//$this->Session->setFlash('You have successfully logged in');
					$this->redirect(array('controller'=>'dashboard','action'=>'index','admin'=>true));
				} else {
					$this->Session->setFlash('Either your Username of Password is incorrect');
				}
			}
		}
	}

 
 /*
 * Logout method
 * Sai para o novo login ou home
 *
 */

		function logout() {
			if($this->Session->check('User')) {
				$this->Session->delete('User');
				//$this->Session->setFlash('You have successfully logged out','flash_good');
			}
			$this->redirect(array('controller'=>'users','action'=>'login',$this->params['prefix'] => false));
			//$this->redirect(array('controller'=>'dashboard','action'=>'index','admin'=>true));

}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('The user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
