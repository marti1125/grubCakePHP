<?php

class GuideLineDetailController extends AppController {
    
    public $helpers = array('Html', 'Form');
    
    public function index() {

        $this->layout = 'home';

        $this->set('guidelinedetails', $this->GuideLineDetail->find('all'));
    }  
       
    public function add() {

        $this->layout = 'home';
        
        $speechs = $this->GuideLineDetail->Speech->find('list');

        $this->set('speechs', $speechs);
        
        $glcategories = $this->GuideLineDetail->GuideLineCategory->find('list');

        $this->set('glcategories', $glcategories);

        if ($this->request->is('post')) {
            $this->GuideLineDetail->create();
            if ($this->GuideLineDetail->save($this->request->data)) {
                $this->Session->setFlash('Su grabación ha sido guardada.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('No se podido guardar la grabación.');
            }
        }
    }
    
    public function edit($id = null) {

        $this->layout = 'home';

        $this->GuideLineDetail->id = $id;

        $speechs = $this->GuideLineDetail->Speech->find('list');

        $this->set('speechs', $speechs);
        
        $glcategories = $this->GuideLineDetail->GuideLineCategory->find('list');

        $this->set('glcategories', $glcategories);

        if ($this->request->is('get')) {
            $this->request->data = $this->GuideLineDetail->read();
        } else {
            if ($this->GuideLineDetail->save($this->request->data)) {
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
        if ($this->GuideLineDetail->delete($id)) {
            $this->Session->setFlash('La grabación con el codigo: ' . $id . ' ah sido retirada.');
            $this->redirect(array('action' => 'index'));
        }
    }
    
}

?>
