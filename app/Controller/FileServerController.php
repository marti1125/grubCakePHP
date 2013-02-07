<?php

class FileServerController extends AppController {

    public $helpers = array('Html', 'Form');

    public function index() {

        $this->layout = 'home';

        $this->set('file', $this->FileServer->find('all'));
    }

    public function add() {

        $this->layout = 'home';

        if ($this->request->is('post')) {
            $this->FileServer->create();
            if ($this->FileServer->save($this->request->data)) {
                $this->Session->setFlash('Su grabación ha sido guardada.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('No se podido guardar la grabación.');
            }
        }
    }
    
    public function edit($id = null) {

        $this->layout = 'home';

        $this->FileServer->id = $id;        

        if ($this->request->is('get')) {
            $this->request->data = $this->FileServer->read();
        } else {
            if ($this->FileServer->save($this->request->data)) {
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
        if ($this->FileServer->delete($id)) {
            $this->Session->setFlash('La grabación con el codigo: ' . $id . ' ah sido retirada.');
            $this->redirect(array('action' => 'index'));
        }
    }

}

?>
