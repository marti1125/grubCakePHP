<?php

class WordController extends AppController {

    public $helpers = array('Html', 'Form');
    public $components = array('RequestHandler');
    public $paginate = array(
        'limit' => 10,
        'order' => array(
            'Word.PK_word' => 'asc'
        )
    );

    public function index() {

        $this->layout = 'home';

        $this->set('words', $this->Word->find('all'));
    }

    public function add() {

        $this->layout = 'home';

        if ($this->request->is('post')) {
            $this->Word->create();
            if ($this->Word->save($this->request->data)) {
                $this->Session->setFlash('Su grabación ha sido guardada.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('No se podido guardar la grabación.');
            }
        }
    }

    public function edit($id = null) {

        $this->layout = 'home';

        $this->Word->id = $id;

        if ($this->request->is('get')) {
            $this->request->data = $this->Word->read();
        } else {
            if ($this->Word->save($this->request->data)) {
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
        if ($this->Word->delete($id)) {
            $this->Session->setFlash('La grabación con el codigo: ' . $id . ' ah sido retirada.');
            $this->redirect(array('action' => 'index'));
        }
    }

    public function json() {

        $this->layout = 'ajax'; 
        
        $words = $this->Word->find('all');

        $this->set('words', $words);        
     
        $this->set('_serialize', 'words');   
        
        //$this->set(compact('words'));
        
        
    }

}

?>
