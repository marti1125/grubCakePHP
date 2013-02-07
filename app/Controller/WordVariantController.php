<?php

class WordVariantController extends AppController {

    public $helpers = array('Html', 'Form');

    public function index() {

        $this->layout = 'home';

        $this->WordVariant->recursive = 1;

        $wordvariants = $this->WordVariant->find('all');

        $this->set('wordvariants', $wordvariants);
    }

    public function add() {

        $this->layout = 'home';

        $wordvariants = $this->WordVariant->Word->find('list');

        $this->set('wordvariants', $wordvariants);       

        if ($this->request->is('post')) {
            $this->WordVariant->create();
            if ($this->WordVariant->save($this->request->data)) {
                $this->Session->setFlash('Su grabación ha sido guardada.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('No se podido guardar la grabación.');
            }
        }
    }

    public function edit($id = null) {

        $this->layout = 'home';

        $this->WordVariant->id = $id;

        $wordvariants = $this->WordVariant->Word->find('list');

        $this->set('wordvariants', $wordvariants); 

        if ($this->request->is('get')) {
            $this->request->data = $this->WordVariant->read();
        } else {
            if ($this->WordVariant->save($this->request->data)) {
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
        if ($this->WordVariant->delete($id)) {
            $this->Session->setFlash('La grabación con el codigo: ' . $id . ' ah sido retirada.');
            $this->redirect(array('action' => 'index'));
        }
    }

}

?>
