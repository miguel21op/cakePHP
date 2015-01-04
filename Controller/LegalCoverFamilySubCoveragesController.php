<?php
App::uses('AppController', 'Controller');
/**
 * LegalCoverFamilySubCoverages Controller
 *
 * @property LegalCoverFamilySubCoverage $LegalCoverFamilySubCoverage
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class LegalCoverFamilySubCoveragesController extends AppController {

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
		$this->LegalCoverFamilySubCoverage->recursive = 0;
		$this->set('legalCoverFamilySubCoverages', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->LegalCoverFamilySubCoverage->exists($id)) {
			throw new NotFoundException(__('Invalid legal cover family sub coverage'));
		}
		$options = array('conditions' => array('LegalCoverFamilySubCoverage.' . $this->LegalCoverFamilySubCoverage->primaryKey => $id));
		$this->set('legalCoverFamilySubCoverage', $this->LegalCoverFamilySubCoverage->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->LegalCoverFamilySubCoverage->create();
			if ($this->LegalCoverFamilySubCoverage->save($this->request->data)) {
				$this->Session->setFlash(__('The legal cover family sub coverage has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The legal cover family sub coverage could not be saved. Please, try again.'));
			}
		}
		$legalCoverFamilyCoverages = $this->LegalCoverFamilySubCoverage->LegalCoverFamilyCoverage->find('list');
		$legalCoverFamilySubCoveragesDescriptions = $this->LegalCoverFamilySubCoverage->LegalCoverFamilySubCoveragesDescription->find('list');
		$this->set(compact('legalCoverFamilyCoverages', 'legalCoverFamilySubCoveragesDescriptions'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->LegalCoverFamilySubCoverage->exists($id)) {
			throw new NotFoundException(__('Invalid legal cover family sub coverage'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->LegalCoverFamilySubCoverage->save($this->request->data)) {
				$this->Session->setFlash(__('The legal cover family sub coverage has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The legal cover family sub coverage could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('LegalCoverFamilySubCoverage.' . $this->LegalCoverFamilySubCoverage->primaryKey => $id));
			$this->request->data = $this->LegalCoverFamilySubCoverage->find('first', $options);
		}
		$legalCoverFamilyCoverages = $this->LegalCoverFamilySubCoverage->LegalCoverFamilyCoverage->find('list');
		$legalCoverFamilySubCoveragesDescriptions = $this->LegalCoverFamilySubCoverage->LegalCoverFamilySubCoveragesDescription->find('list');
		$this->set(compact('legalCoverFamilyCoverages', 'legalCoverFamilySubCoveragesDescriptions'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->LegalCoverFamilySubCoverage->id = $id;
		if (!$this->LegalCoverFamilySubCoverage->exists()) {
			throw new NotFoundException(__('Invalid legal cover family sub coverage'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->LegalCoverFamilySubCoverage->delete()) {
			$this->Session->setFlash(__('The legal cover family sub coverage has been deleted.'));
		} else {
			$this->Session->setFlash(__('The legal cover family sub coverage could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
