<?php
class SalvageyardsController extends AppController {

	var $name = 'Salvageyards';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Salvageyard->recursive = 0;
		$this->set('salvageyards', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Salvageyard.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('salvageyard', $this->Salvageyard->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Salvageyard->create();
			if ($this->Salvageyard->save($this->data)) {
				$this->Session->setFlash(__('The Salvageyard has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Salvageyard could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Salvageyard', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Salvageyard->save($this->data)) {
				$this->Session->setFlash(__('The Salvageyard has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Salvageyard could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Salvageyard->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Salvageyard', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Salvageyard->del($id)) {
			$this->Session->setFlash(__('Salvageyard deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>