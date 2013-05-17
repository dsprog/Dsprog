<?php
App::uses('AppController', 'Controller');
/**
 * Testes Controller
 *
 * @property Testis $Testis
 */
class TestesController extends AppController {
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Testis->recursive = 0;
		$this->set('testes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Testis->exists($id)) {
			throw new NotFoundException(__('Invalid testis'));
		}
		$options = array('conditions' => array('Testis.' . $this->Testis->primaryKey => $id));
		$this->set('testis', $this->Testis->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Testis->create();
			if ($this->Testis->save($this->request->data)) {
				$this->Session->setFlash(__('The testis has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The testis could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Testis->exists($id)) {
			throw new NotFoundException(__('Invalid testis'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Testis->save($this->request->data)) {
				$this->Session->setFlash(__('The testis has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The testis could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Testis.' . $this->Testis->primaryKey => $id));
			$this->request->data = $this->Testis->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Testis->id = $id;
		if (!$this->Testis->exists()) {
			throw new NotFoundException(__('Invalid testis'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Testis->delete()) {
			$this->Session->setFlash(__('Testis deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Testis was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
