<?php

class RecordController extends AppController {

    public $helpers = array('Html', 'Form');

    public function index() {

        $this->layout = 'home';

        $this->set('record', $this->Record->find('all'));
    }

    public function add() {

        $this->layout = 'home';

        if ($this->request->is('post')) {
            $this->Record->create();
            if ($this->Record->save($this->request->data)) {
                $this->Session->setFlash('Su grabación ha sido guardada.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('No se podido guardar la grabación.');
            }
        }
    }

    public function edit($PK_record = null) {

        $this->layout = 'home';

        $this->Record->id = $PK_record;
        if ($this->request->is('get')) {
            $this->request->data = $this->Record->read();
        } else {
            if ($this->Record->save($this->request->data)) {
                $this->Session->setFlash('Se ha realizado los cambios.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('No se pudo realizar los cambios.');
            }
        }
    }

    public function delete($PK_record) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
        if ($this->Record->delete($PK_record)) {
            $this->Session->setFlash('La grabación con el codigo: ' . $PK_record . ' ah sido retirada.');
            $this->redirect(array('action' => 'index'));
        }
    }

}

?>
