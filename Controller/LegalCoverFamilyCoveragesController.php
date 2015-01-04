<?php
App::uses('AppController', 'Controller');
/**
 * LegalCoverFamilyCoverages Controller
 *
 * @property LegalCoverFamilyCoverage $LegalCoverFamilyCoverage
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class LegalCoverFamilyCoveragesController extends AppController {

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
		$this->LegalCoverFamilyCoverage->recursive = 0;
		$this->set('legalCoverFamilyCoverages', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->LegalCoverFamilyCoverage->exists($id)) {
			throw new NotFoundException(__('Invalid legal cover family coverage'));
		}
		$options = array('conditions' => array('LegalCoverFamilyCoverage.' . $this->LegalCoverFamilyCoverage->primaryKey => $id));
		$this->set('legalCoverFamilyCoverage', $this->LegalCoverFamilyCoverage->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->LegalCoverFamilyCoverage->create();
			if ($this->LegalCoverFamilyCoverage->save($this->request->data)) {
				$this->Session->setFlash(__('The legal cover family coverage has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The legal cover family coverage could not be saved. Please, try again.'));
			}
		}
		$legalCoverFamilyPlans = $this->LegalCoverFamilyCoverage->LegalCoverFamilyPlan->find('list');
		$legalCoverFamilyCoveragesDescriptions = $this->LegalCoverFamilyCoverage->LegalCoverFamilyCoveragesDescription->find('list');
		$this->set(compact('legalCoverFamilyPlans', 'legalCoverFamilyCoveragesDescriptions'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->LegalCoverFamilyCoverage->exists($id)) {
			throw new NotFoundException(__('Invalid legal cover family coverage'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->LegalCoverFamilyCoverage->save($this->request->data)) {
				$this->Session->setFlash(__('The legal cover family coverage has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The legal cover family coverage could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('LegalCoverFamilyCoverage.' . $this->LegalCoverFamilyCoverage->primaryKey => $id));
			$this->request->data = $this->LegalCoverFamilyCoverage->find('first', $options);
		}
		$legalCoverFamilyPlans = $this->LegalCoverFamilyCoverage->LegalCoverFamilyPlan->find('list');
		$legalCoverFamilyCoveragesDescriptions = $this->LegalCoverFamilyCoverage->LegalCoverFamilyCoveragesDescription->find('list');
		$this->set(compact('legalCoverFamilyPlans', 'legalCoverFamilyCoveragesDescriptions'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->LegalCoverFamilyCoverage->id = $id;
		if (!$this->LegalCoverFamilyCoverage->exists()) {
			throw new NotFoundException(__('Invalid legal cover family coverage'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->LegalCoverFamilyCoverage->delete()) {
			$this->Session->setFlash(__('The legal cover family coverage has been deleted.'));
		} else {
			$this->Session->setFlash(__('The legal cover family coverage could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
