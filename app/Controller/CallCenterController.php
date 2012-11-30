<?php

class CallCenterController extends AppController {

    public $helpers = array('Html', 'Form');

    public function index() {

        $this->layout = 'home';

        $this->CallCenter->recursive = 1;

        $callcenters = $this->CallCenter->find('all');

        $this->set('callcenters', $callcenters);

        //$this->set('callcenters', $this->CallCenter->find('all'));
    }

    public function add() {

        $this->layout = 'home';

        $companys = $this->CallCenter->Company->find('list');

        $this->set('companys', $companys);

        if ($this->request->is('post')) {
            $this->CallCenter->create();
            if ($this->CallCenter->save($this->request->data)) {
                $this->Session->setFlash('Su grabación ha sido guardada.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('No se podido guardar la grabación.');
            }
        }
    }

    public function edit($id = null) {

        $this->layout = 'home';

        $this->CallCenter->id = $id;

        $companys = $this->CallCenter->Company->find('list');

        $this->set('companys', $companys);

        if ($this->request->is('get')) {
            $this->request->data = $this->CallCenter->read();
        } else {
            if ($this->CallCenter->save($this->request->data)) {
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
        if ($this->CallCenter->delete($id)) {
            $this->Session->setFlash('La grabación con el codigo: ' . $id . ' ah sido retirada.');
            $this->redirect(array('action' => 'index'));
        }
    }

}

?>
