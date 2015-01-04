<?php
App::uses('AppController', 'Controller');
/**
 * LegalCoverFamilyProviders Controller
 *
 * @property LegalCoverFamilyProvider $LegalCoverFamilyProvider
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class LegalCoverFamilyProvidersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->LegalCoverFamilyProvider->recursive = 0;
		$this->set('legalCoverFamilyProviders', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->LegalCoverFamilyProvider->exists($id)) {
			throw new NotFoundException(__('Invalid legal cover family provider'));
		}
		$options = array('conditions' => array('LegalCoverFamilyProvider.' . $this->LegalCoverFamilyProvider->primaryKey => $id));
		$this->set('legalCoverFamilyProvider', $this->LegalCoverFamilyProvider->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->LegalCoverFamilyProvider->create();
			if ($this->LegalCoverFamilyProvider->save($this->request->data)) {
				$this->Session->setFlash(__('The legal cover family provider has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The legal cover family provider could not be saved. Please, try again.'));
			}
		}
		$companies = $this->LegalCoverFamilyProvider->Company->find('list');
		$this->set(compact('companies'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->LegalCoverFamilyProvider->exists($id)) {
			throw new NotFoundException(__('Invalid legal cover family provider'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->LegalCoverFamilyProvider->save($this->request->data)) {
				$this->Session->setFlash(__('The legal cover family provider has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The legal cover family provider could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('LegalCoverFamilyProvider.' . $this->LegalCoverFamilyProvider->primaryKey => $id));
			$this->request->data = $this->LegalCoverFamilyProvider->find('first', $options);
		}
		$companies = $this->LegalCoverFamilyProvider->Company->find('list');
		$this->set(compact('companies'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->LegalCoverFamilyProvider->id = $id;
		if (!$this->LegalCoverFamilyProvider->exists()) {
			throw new NotFoundException(__('Invalid legal cover family provider'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->LegalCoverFamilyProvider->delete()) {
			$this->Session->setFlash(__('The legal cover family provider has been deleted.'));
		} else {
			$this->Session->setFlash(__('The legal cover family provider could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
