<?php

class ExtensionNumberController extends AppController {

    public $helpers = array('Html', 'Form');

    public function index() {

        $this->layout = 'home';

        $this->set('extesions', $this->ExtensionNumber->find('all'));
    }

    public function add() {

        $this->layout = 'home';

        $callcenters = $this->ExtensionNumber->CallCenter->find('list');

        $this->set('callcenters', $callcenters);
        
        $agents = $this->ExtensionNumber->Agent->find('list');

        $this->set('agents', $agents);
        
        $comareas = $this->ExtensionNumber->CompanyArea->find('list');

        $this->set('comareas', $comareas);        

        if ($this->request->is('post')) {
            $this->ExtensionNumber->create();
            if ($this->ExtensionNumber->save($this->request->data)) {
                $this->Session->setFlash('Su grabación ha sido guardada.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('No se podido guardar la grabación.');
            }
        }
    }

    public function edit($id = null) {

        $this->layout = 'home';
        
        $this->ExtensionNumber->id = $id;

        $callcenters = $this->ExtensionNumber->CallCenter->find('list');

        $this->set('callcenters', $callcenters);
        
        $agents = $this->ExtensionNumber->Agent->find('list');

        $this->set('agents', $agents);
        
        $comareas = $this->ExtensionNumber->CompanyArea->find('list');

        $this->set('comareas', $comareas); 

        if ($this->request->is('get')) {
            $this->request->data = $this->ExtensionNumber->read();
        } else {
            if ($this->ExtensionNumber->save($this->request->data)) {
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
        if ($this->ExtensionNumber->delete($id)) {
            $this->Session->setFlash('La grabación con el codigo: ' . $id . ' ah sido retirada.');
            $this->redirect(array('action' => 'index'));
        }
    }

}

?>
