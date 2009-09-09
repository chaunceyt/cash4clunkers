<?php
class DealershipsController extends AppController {

	var $name = 'Dealerships';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Dealership->recursive = 0;
		$this->set('dealerships', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Dealership.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('dealership', $this->Dealership->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Dealership->create();
			if ($this->Dealership->save($this->data)) {
				$this->Session->setFlash(__('The Dealership has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Dealership could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Dealership', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Dealership->save($this->data)) {
				$this->Session->setFlash(__('The Dealership has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Dealership could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Dealership->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Dealership', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Dealership->del($id)) {
			$this->Session->setFlash(__('Dealership deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>