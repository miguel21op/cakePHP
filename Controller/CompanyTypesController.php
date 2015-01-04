<?php
App::uses('AppController', 'Controller');
/**
 * CompanyTypes Controller
 *
 * @property CompanyType $CompanyType
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class CompanyTypesController extends AppController {

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
		$this->CompanyType->recursive = 0;
		$this->set('companyTypes', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->CompanyType->exists($id)) {
			throw new NotFoundException(__('Invalid company type'));
		}
		$options = array('conditions' => array('CompanyType.' . $this->CompanyType->primaryKey => $id));
		$this->set('companyType', $this->CompanyType->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->CompanyType->create();
			if ($this->CompanyType->save($this->request->data)) {
				$this->Session->setFlash(__('The company type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The company type could not be saved. Please, try again.'));
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
		if (!$this->CompanyType->exists($id)) {
			throw new NotFoundException(__('Invalid company type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CompanyType->save($this->request->data)) {
				$this->Session->setFlash(__('The company type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The company type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CompanyType.' . $this->CompanyType->primaryKey => $id));
			$this->request->data = $this->CompanyType->find('first', $options);
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
		$this->CompanyType->id = $id;
		if (!$this->CompanyType->exists()) {
			throw new NotFoundException(__('Invalid company type'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CompanyType->delete()) {
			$this->Session->setFlash(__('The company type has been deleted.'));
		} else {
			$this->Session->setFlash(__('The company type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
