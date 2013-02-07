<?php

class AgentController extends AppController {

    public $helpers = array('Html', 'Form');

    public function index() {

        $this->layout = 'home';

        $this->set('agent', $this->Agent->find('all'));
    }

    public function add() {

        $this->layout = 'home';
        
        //$this->data['Agent']['dateCreated'] = DboSource::expression('NOW()'); // sql server NOW() is for Mysql
        //$this->Agent->save($this->data);
        
        // $Model->data['created'] = DboSource::expression('NOW()');

        if ($this->request->is('post')) {
            $this->Agent->create();
            if ($this->Agent->save($this->request->data)) {
                $this->Session->setFlash('Su grabación ha sido guardada.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('No se podido guardar la grabación.');
            }
        }
    }

    public function edit($id = null) {

        $this->layout = 'home';

        $this->Agent->id = $id;       

        if ($this->request->is('get')) {
            $this->request->data = $this->Agent->read();
        } else {
            if ($this->Agent->save($this->request->data)) {
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
        if ($this->Agent->delete($id)) {
            $this->Session->setFlash('La grabación con el codigo: ' . $id . ' ah sido retirada.');
            $this->redirect(array('action' => 'index'));
        }
    }

}

?>
