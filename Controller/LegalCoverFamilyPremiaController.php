<?php
App::uses('AppController', 'Controller');
/**
 * LegalCoverFamilyPremia Controller
 *
 * @property LegalCoverFamilyPremium $LegalCoverFamilyPremium
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class LegalCoverFamilyPremiaController extends AppController {

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
		$this->LegalCoverFamilyPremium->recursive = 0;
		$this->set('legalCoverFamilyPremia', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->LegalCoverFamilyPremium->exists($id)) {
			throw new NotFoundException(__('Invalid legal cover family premium'));
		}
		$options = array('conditions' => array('LegalCoverFamilyPremium.' . $this->LegalCoverFamilyPremium->primaryKey => $id));
		$this->set('legalCoverFamilyPremium', $this->LegalCoverFamilyPremium->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->LegalCoverFamilyPremium->create();
			if ($this->LegalCoverFamilyPremium->save($this->request->data)) {
				$this->Session->setFlash(__('The legal cover family premium has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The legal cover family premium could not be saved. Please, try again.'));
			}
		}
		$legalCoverFamilyPlans = $this->LegalCoverFamilyPremium->LegalCoverFamilyPlan->find('list');
		$this->set(compact('legalCoverFamilyPlans'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->LegalCoverFamilyPremium->exists($id)) {
			throw new NotFoundException(__('Invalid legal cover family premium'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->LegalCoverFamilyPremium->save($this->request->data)) {
				$this->Session->setFlash(__('The legal cover family premium has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The legal cover family premium could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('LegalCoverFamilyPremium.' . $this->LegalCoverFamilyPremium->primaryKey => $id));
			$this->request->data = $this->LegalCoverFamilyPremium->find('first', $options);
		}
		$legalCoverFamilyPlans = $this->LegalCoverFamilyPremium->LegalCoverFamilyPlan->find('list');
		$this->set(compact('legalCoverFamilyPlans'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->LegalCoverFamilyPremium->id = $id;
		if (!$this->LegalCoverFamilyPremium->exists()) {
			throw new NotFoundException(__('Invalid legal cover family premium'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->LegalCoverFamilyPremium->delete()) {
			$this->Session->setFlash(__('The legal cover family premium has been deleted.'));
		} else {
			$this->Session->setFlash(__('The legal cover family premium could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
