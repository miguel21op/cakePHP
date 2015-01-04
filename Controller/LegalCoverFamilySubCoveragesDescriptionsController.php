<?php
App::uses('AppController', 'Controller');
/**
 * LegalCoverFamilySubCoveragesDescriptions Controller
 *
 * @property LegalCoverFamilySubCoveragesDescription $LegalCoverFamilySubCoveragesDescription
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class LegalCoverFamilySubCoveragesDescriptionsController extends AppController {

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
		$this->LegalCoverFamilySubCoveragesDescription->recursive = 0;
		$this->set('legalCoverFamilySubCoveragesDescriptions', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->LegalCoverFamilySubCoveragesDescription->exists($id)) {
			throw new NotFoundException(__('Invalid legal cover family sub coverages description'));
		}
		$options = array('conditions' => array('LegalCoverFamilySubCoveragesDescription.' . $this->LegalCoverFamilySubCoveragesDescription->primaryKey => $id));
		$this->set('legalCoverFamilySubCoveragesDescription', $this->LegalCoverFamilySubCoveragesDescription->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->LegalCoverFamilySubCoveragesDescription->create();
			if ($this->LegalCoverFamilySubCoveragesDescription->save($this->request->data)) {
				$this->Session->setFlash(__('The legal cover family sub coverages description has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The legal cover family sub coverages description could not be saved. Please, try again.'));
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
		if (!$this->LegalCoverFamilySubCoveragesDescription->exists($id)) {
			throw new NotFoundException(__('Invalid legal cover family sub coverages description'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->LegalCoverFamilySubCoveragesDescription->save($this->request->data)) {
				$this->Session->setFlash(__('The legal cover family sub coverages description has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The legal cover family sub coverages description could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('LegalCoverFamilySubCoveragesDescription.' . $this->LegalCoverFamilySubCoveragesDescription->primaryKey => $id));
			$this->request->data = $this->LegalCoverFamilySubCoveragesDescription->find('first', $options);
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
		$this->LegalCoverFamilySubCoveragesDescription->id = $id;
		if (!$this->LegalCoverFamilySubCoveragesDescription->exists()) {
			throw new NotFoundException(__('Invalid legal cover family sub coverages description'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->LegalCoverFamilySubCoveragesDescription->delete()) {
			$this->Session->setFlash(__('The legal cover family sub coverages description has been deleted.'));
		} else {
			$this->Session->setFlash(__('The legal cover family sub coverages description could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
