<?php

class GuideLineCategoryController extends AppController {
    
    public $helpers = array('Html', 'Form');

    public function index() {

        $this->layout = 'home';        

        $glcategories = $this->GuideLineCategory->find('all');

        $this->set('glcategories', $glcategories);
    }

    public function add() {

        $this->layout = 'home';

        $glcategories = $this->GuideLineCategory->GuideLine->find('list');

        $this->set('glcategories', $glcategories);       

        if ($this->request->is('post')) {
            $this->GuideLineCategory->create();
            if ($this->GuideLineCategory->save($this->request->data)) {
                $this->Session->setFlash('Su grabación ha sido guardada.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('No se podido guardar la grabación.');
            }
        }
    }

    public function edit($id = null) {

        $this->layout = 'home';

        $this->GuideLineCategory->id = $id;

        $glcategories = $this->GuideLineCategory->GuideLine->find('list');

        $this->set('glcategories', $glcategories); 

        if ($this->request->is('get')) {
            $this->request->data = $this->GuideLineCategory->read();
        } else {
            if ($this->GuideLineCategory->save($this->request->data)) {
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
        if ($this->GuideLineCategory->delete($id)) {
            $this->Session->setFlash('La grabación con el codigo: ' . $id . ' ah sido retirada.');
            $this->redirect(array('action' => 'index'));
        }
    }
    
}

?>
