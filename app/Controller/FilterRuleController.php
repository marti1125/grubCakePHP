<?php

class FilterRuleController extends AppController {

    public $helpers = array('Html', 'Form');

    public function index() {

        $this->layout = 'home';       

        $filterrules = $this->FilterRule->find('all');

        $this->set('filterrules', $filterrules);
    }

    public function add() {

        $this->layout = 'home';

        $speechs = $this->FilterRule->Speech->find('list');

        $this->set('speechs', $speechs);

        if ($this->request->is('post')) {
            $this->FilterRule->create();
            if ($this->FilterRule->save($this->request->data)) {
                $this->Session->setFlash('Su grabación ha sido guardada.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('No se podido guardar la grabación.');
            }
        }
    }

    public function edit($id = null) {

        $this->layout = 'home';

        $this->FilterRule->id = $id;

        $speechs = $this->FilterRule->Speech->find('list');

        $this->set('speechs', $speechs);

        if ($this->request->is('get')) {
            $this->request->data = $this->FilterRule->read();
        } else {
            if ($this->FilterRule->save($this->request->data)) {
                $this->Session->setFlash('Se ha realizado los cambios.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('No se pudo realizar los cambios.');
            }
        }
    }

    public function delete($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
        if ($this->FilterRule->delete($id)) {
            $this->Session->setFlash('La grabación con el codigo: ' . $id . ' ah sido retirada.');
            $this->redirect(array('action' => 'index'));
        }
    }

}

?>
