<?php
App::uses('AppController', 'Controller');
/**
 * LegalCoverFamilyPlans Controller
 *
 * @property LegalCoverFamilyPlan $LegalCoverFamilyPlan
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class LegalCoverFamilyPlansController extends AppController {

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
		$this->LegalCoverFamilyPlan->recursive = 0;
		$this->set('legalCoverFamilyPlans', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->LegalCoverFamilyPlan->exists($id)) {
			throw new NotFoundException(__('Invalid legal cover family plan'));
		}
		$options = array('conditions' => array('LegalCoverFamilyPlan.' . $this->LegalCoverFamilyPlan->primaryKey => $id));
		$this->set('legalCoverFamilyPlan', $this->LegalCoverFamilyPlan->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->LegalCoverFamilyPlan->create();
			if ($this->LegalCoverFamilyPlan->save($this->request->data)) {
				$this->Session->setFlash(__('The legal cover family plan has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The legal cover family plan could not be saved. Please, try again.'));
			}
		}
		$legalCoverFamilyProviders = $this->LegalCoverFamilyPlan->LegalCoverFamilyProvider->find('list');
		$this->set(compact('legalCoverFamilyProviders'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->LegalCoverFamilyPlan->exists($id)) {
			throw new NotFoundException(__('Invalid legal cover family plan'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->LegalCoverFamilyPlan->save($this->request->data)) {
				$this->Session->setFlash(__('The legal cover family plan has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The legal cover family plan could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('LegalCoverFamilyPlan.' . $this->LegalCoverFamilyPlan->primaryKey => $id));
			$this->request->data = $this->LegalCoverFamilyPlan->find('first', $options);
		}
		$legalCoverFamilyProviders = $this->LegalCoverFamilyPlan->LegalCoverFamilyProvider->find('list');
		$this->set(compact('legalCoverFamilyProviders'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->LegalCoverFamilyPlan->id = $id;
		if (!$this->LegalCoverFamilyPlan->exists()) {
			throw new NotFoundException(__('Invalid legal cover family plan'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->LegalCoverFamilyPlan->delete()) {
			$this->Session->setFlash(__('The legal cover family plan has been deleted.'));
		} else {
			$this->Session->setFlash(__('The legal cover family plan could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
