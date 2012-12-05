<?php

class CompanyAreaController extends AppController {

    public $helpers = array('Html', 'Form');

    function index() {
        $this->layout = 'home';

        $compyareas = $this->CompanyArea->find('all');

        $this->set('compyareas', $compyareas);
    }

    public function add() {

        $this->layout = 'home';

        $companies = $this->CompanyArea->Company->find('list');

        $this->set('companies', $companies);

        if ($this->request->is('post')) {
            $this->CompanyArea->create();
            if ($this->CompanyArea->save($this->request->data)) {
                $this->Session->setFlash('Su grabación ha sido guardada.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('No se podido guardar la grabación.');
            }
        }
    }

    public function edit($id = null) {

        $this->layout = 'home';

        $this->CompanyArea->id = $id;

        $companies = $this->CompanyArea->Company->find('list');

        $this->set('companies', $companies);

        if ($this->request->is('get')) {
            $this->request->data = $this->CompanyArea->read();
        } else {
            if ($this->CompanyArea->save($this->request->data)) {
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
        if ($this->CompanyArea->delete($id)) {
            $this->Session->setFlash('La grabación con el codigo: ' . $id . ' ah sido retirada.');
            $this->redirect(array('action' => 'index'));
        }
    }

}

?>
