<?php
App::uses('AppController', 'Controller');
/**
 * LegalCoverFamilyQuoteResponses Controller
 *
 * @property LegalCoverFamilyQuoteResponse $LegalCoverFamilyQuoteResponse
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class LegalCoverFamilyQuoteResponsesController extends AppController {

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
		$this->LegalCoverFamilyQuoteResponse->recursive = 0;
		$this->set('legalCoverFamilyQuoteResponses', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->LegalCoverFamilyQuoteResponse->exists($id)) {
			throw new NotFoundException(__('Invalid legal cover family quote response'));
		}
		$options = array('conditions' => array('LegalCoverFamilyQuoteResponse.' . $this->LegalCoverFamilyQuoteResponse->primaryKey => $id));
		$this->set('legalCoverFamilyQuoteResponse', $this->LegalCoverFamilyQuoteResponse->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->LegalCoverFamilyQuoteResponse->create();
			if ($this->LegalCoverFamilyQuoteResponse->save($this->request->data)) {
				$this->Session->setFlash(__('The legal cover family quote response has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The legal cover family quote response could not be saved. Please, try again.'));
			}
		}
		$legalCoverFamilyPlans = $this->LegalCoverFamilyQuoteResponse->LegalCoverFamilyPlan->find('list');
		$legalCoverFamilyQuoteRequests = $this->LegalCoverFamilyQuoteResponse->LegalCoverFamilyQuoteRequest->find('list');
		$companies = $this->LegalCoverFamilyQuoteResponse->Company->find('list');
		$this->set(compact('legalCoverFamilyPlans', 'legalCoverFamilyQuoteRequests', 'companies'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->LegalCoverFamilyQuoteResponse->exists($id)) {
			throw new NotFoundException(__('Invalid legal cover family quote response'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->LegalCoverFamilyQuoteResponse->save($this->request->data)) {
				$this->Session->setFlash(__('The legal cover family quote response has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The legal cover family quote response could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('LegalCoverFamilyQuoteResponse.' . $this->LegalCoverFamilyQuoteResponse->primaryKey => $id));
			$this->request->data = $this->LegalCoverFamilyQuoteResponse->find('first', $options);
		}
		$legalCoverFamilyPlans = $this->LegalCoverFamilyQuoteResponse->LegalCoverFamilyPlan->find('list');
		$legalCoverFamilyQuoteRequests = $this->LegalCoverFamilyQuoteResponse->LegalCoverFamilyQuoteRequest->find('list');
		$companies = $this->LegalCoverFamilyQuoteResponse->Company->find('list');
		$this->set(compact('legalCoverFamilyPlans', 'legalCoverFamilyQuoteRequests', 'companies'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->LegalCoverFamilyQuoteResponse->id = $id;
		if (!$this->LegalCoverFamilyQuoteResponse->exists()) {
			throw new NotFoundException(__('Invalid legal cover family quote response'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->LegalCoverFamilyQuoteResponse->delete()) {
			$this->Session->setFlash(__('The legal cover family quote response has been deleted.'));
		} else {
			$this->Session->setFlash(__('The legal cover family quote response could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->LegalCoverFamilyQuoteResponse->recursive = 0;
		$this->set('legalCoverFamilyQuoteResponses', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->LegalCoverFamilyQuoteResponse->exists($id)) {
			throw new NotFoundException(__('Invalid legal cover family quote response'));
		}
		$options = array('conditions' => array('LegalCoverFamilyQuoteResponse.' . $this->LegalCoverFamilyQuoteResponse->primaryKey => $id));
		$this->set('legalCoverFamilyQuoteResponse', $this->LegalCoverFamilyQuoteResponse->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->LegalCoverFamilyQuoteResponse->create();
			if ($this->LegalCoverFamilyQuoteResponse->save($this->request->data)) {
				$this->Session->setFlash(__('The legal cover family quote response has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The legal cover family quote response could not be saved. Please, try again.'));
			}
		}
		$legalCoverFamilyPlans = $this->LegalCoverFamilyQuoteResponse->LegalCoverFamilyPlan->find('list');
		$legalCoverFamilyQuoteRequests = $this->LegalCoverFamilyQuoteResponse->LegalCoverFamilyQuoteRequest->find('list');
		$companies = $this->LegalCoverFamilyQuoteResponse->Company->find('list');
		$this->set(compact('legalCoverFamilyPlans', 'legalCoverFamilyQuoteRequests', 'companies'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->LegalCoverFamilyQuoteResponse->exists($id)) {
			throw new NotFoundException(__('Invalid legal cover family quote response'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->LegalCoverFamilyQuoteResponse->save($this->request->data)) {
				$this->Session->setFlash(__('The legal cover family quote response has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The legal cover family quote response could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('LegalCoverFamilyQuoteResponse.' . $this->LegalCoverFamilyQuoteResponse->primaryKey => $id));
			$this->request->data = $this->LegalCoverFamilyQuoteResponse->find('first', $options);
		}
		$legalCoverFamilyPlans = $this->LegalCoverFamilyQuoteResponse->LegalCoverFamilyPlan->find('list');
		$legalCoverFamilyQuoteRequests = $this->LegalCoverFamilyQuoteResponse->LegalCoverFamilyQuoteRequest->find('list');
		$companies = $this->LegalCoverFamilyQuoteResponse->Company->find('list');
		$this->set(compact('legalCoverFamilyPlans', 'legalCoverFamilyQuoteRequests', 'companies'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->LegalCoverFamilyQuoteResponse->id = $id;
		if (!$this->LegalCoverFamilyQuoteResponse->exists()) {
			throw new NotFoundException(__('Invalid legal cover family quote response'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->LegalCoverFamilyQuoteResponse->delete()) {
			$this->Session->setFlash(__('The legal cover family quote response has been deleted.'));
		} else {
			$this->Session->setFlash(__('The legal cover family quote response could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
