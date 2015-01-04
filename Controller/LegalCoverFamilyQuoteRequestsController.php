<?php
App::uses('AppController', 'Controller');
/**
 * LegalCoverFamilyQuoteRequests Controller
 *
 * @property LegalCoverFamilyQuoteRequest $LegalCoverFamilyQuoteRequest
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class LegalCoverFamilyQuoteRequestsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->LegalCoverFamilyQuoteRequest->recursive = 0;
		$this->set('legalCoverFamilyQuoteRequests', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->LegalCoverFamilyQuoteRequest->exists($id)) {
			throw new NotFoundException(__('Invalid legal cover family quote request'));
		}
		$options = array('conditions' => array('LegalCoverFamilyQuoteRequest.' . $this->LegalCoverFamilyQuoteRequest->primaryKey => $id));
		$this->set('legalCoverFamilyQuoteRequest', $this->LegalCoverFamilyQuoteRequest->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->LegalCoverFamilyQuoteRequest->create();
			if ($this->LegalCoverFamilyQuoteRequest->save($this->request->data)) {
				$this->Session->setFlash(__('The legal cover family quote request has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The legal cover family quote request could not be saved. Please, try again.'));
			}
		}
		$users = $this->LegalCoverFamilyQuoteRequest->User->find('list');
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
		if (!$this->LegalCoverFamilyQuoteRequest->exists($id)) {
			throw new NotFoundException(__('Invalid legal cover family quote request'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->LegalCoverFamilyQuoteRequest->save($this->request->data)) {
				$this->Session->setFlash(__('The legal cover family quote request has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The legal cover family quote request could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('LegalCoverFamilyQuoteRequest.' . $this->LegalCoverFamilyQuoteRequest->primaryKey => $id));
			$this->request->data = $this->LegalCoverFamilyQuoteRequest->find('first', $options);
		}
		$users = $this->LegalCoverFamilyQuoteRequest->User->find('list');
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
		$this->LegalCoverFamilyQuoteRequest->id = $id;
		if (!$this->LegalCoverFamilyQuoteRequest->exists()) {
			throw new NotFoundException(__('Invalid legal cover family quote request'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->LegalCoverFamilyQuoteRequest->delete()) {
			$this->Session->setFlash(__('The legal cover family quote request has been deleted.'));
		} else {
			$this->Session->setFlash(__('The legal cover family quote request could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->LegalCoverFamilyQuoteRequest->recursive = 0;
		$this->set('legalCoverFamilyQuoteRequests', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->LegalCoverFamilyQuoteRequest->exists($id)) {
			throw new NotFoundException(__('Invalid legal cover family quote request'));
		}
		$options = array('conditions' => array('LegalCoverFamilyQuoteRequest.' . $this->LegalCoverFamilyQuoteRequest->primaryKey => $id));
		$this->set('legalCoverFamilyQuoteRequest', $this->LegalCoverFamilyQuoteRequest->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->LegalCoverFamilyQuoteRequest->create();
			if ($this->LegalCoverFamilyQuoteRequest->save($this->request->data)) {
				$this->Session->setFlash(__('The legal cover family quote request has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The legal cover family quote request could not be saved. Please, try again.'));
			}
		}
		$users = $this->LegalCoverFamilyQuoteRequest->User->find('list');
		$this->set(compact('users'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->LegalCoverFamilyQuoteRequest->exists($id)) {
			throw new NotFoundException(__('Invalid legal cover family quote request'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->LegalCoverFamilyQuoteRequest->save($this->request->data)) {
				$this->Session->setFlash(__('The legal cover family quote request has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The legal cover family quote request could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('LegalCoverFamilyQuoteRequest.' . $this->LegalCoverFamilyQuoteRequest->primaryKey => $id));
			$this->request->data = $this->LegalCoverFamilyQuoteRequest->find('first', $options);
		}
		$users = $this->LegalCoverFamilyQuoteRequest->User->find('list');
		$this->set(compact('users'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->LegalCoverFamilyQuoteRequest->id = $id;
		if (!$this->LegalCoverFamilyQuoteRequest->exists()) {
			throw new NotFoundException(__('Invalid legal cover family quote request'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->LegalCoverFamilyQuoteRequest->delete()) {
			$this->Session->setFlash(__('The legal cover family quote request has been deleted.'));
		} else {
			$this->Session->setFlash(__('The legal cover family quote request could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
