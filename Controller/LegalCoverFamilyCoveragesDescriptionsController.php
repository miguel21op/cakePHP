<?php
App::uses('AppController', 'Controller');
/**
 * LegalCoverFamilyCoveragesDescriptions Controller
 *
 * @property LegalCoverFamilyCoveragesDescription $LegalCoverFamilyCoveragesDescription
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class LegalCoverFamilyCoveragesDescriptionsController extends AppController {

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
		$this->LegalCoverFamilyCoveragesDescription->recursive = 0;
		$this->set('legalCoverFamilyCoveragesDescriptions', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->LegalCoverFamilyCoveragesDescription->exists($id)) {
			throw new NotFoundException(__('Invalid legal cover family coverages description'));
		}
		$options = array('conditions' => array('LegalCoverFamilyCoveragesDescription.' . $this->LegalCoverFamilyCoveragesDescription->primaryKey => $id));
		$this->set('legalCoverFamilyCoveragesDescription', $this->LegalCoverFamilyCoveragesDescription->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->LegalCoverFamilyCoveragesDescription->create();
			if ($this->LegalCoverFamilyCoveragesDescription->save($this->request->data)) {
				$this->Session->setFlash(__('The legal cover family coverages description has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The legal cover family coverages description could not be saved. Please, try again.'));
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
		if (!$this->LegalCoverFamilyCoveragesDescription->exists($id)) {
			throw new NotFoundException(__('Invalid legal cover family coverages description'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->LegalCoverFamilyCoveragesDescription->save($this->request->data)) {
				$this->Session->setFlash(__('The legal cover family coverages description has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The legal cover family coverages description could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('LegalCoverFamilyCoveragesDescription.' . $this->LegalCoverFamilyCoveragesDescription->primaryKey => $id));
			$this->request->data = $this->LegalCoverFamilyCoveragesDescription->find('first', $options);
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
		$this->LegalCoverFamilyCoveragesDescription->id = $id;
		if (!$this->LegalCoverFamilyCoveragesDescription->exists()) {
			throw new NotFoundException(__('Invalid legal cover family coverages description'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->LegalCoverFamilyCoveragesDescription->delete()) {
			$this->Session->setFlash(__('The legal cover family coverages description has been deleted.'));
		} else {
			$this->Session->setFlash(__('The legal cover family coverages description could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
