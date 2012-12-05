<?php

class SpeechDataController extends AppController {

    public $helpers = array('Html', 'Form');
    
    public $uses = array('SpeechData');
    
    /*public $paginate = array(
        'limit' => 1,
        'order' => array(
            'SpeechData.wordOriginal' => 'asc'
        )
    );*/

    public function index() {

        $this->layout = 'home';
        
        $this->set('speechdatas', $this->SpeechData->find('all'));       
        
        
        //qr($this->set('speechdatas', $this->SpeechData->find('all')));

        //$data = $this->paginate('SpeechData');

        //$this->set('speechdata', $data);
        
        //$this->SpeechData->recursive = 1;

        //$speechdatas = $this->SpeechData->find('all');

        //$this->set('speechdatas', $speechdatas);
        
        //$this->set('speechdatas', $this->SpeechData->find('all'));
    }

    public function add() {

        $this->layout = 'home';

        $speechs = $this->SpeechData->Speech->find('list');

        $this->set('speechs', $speechs);

        $words = $this->SpeechData->Word->find('list');

        $this->set('words', $words);

        if ($this->request->is('post')) {
            $this->SpeechData->create();
            if ($this->SpeechData->save($this->request->data)) {
                $this->Session->setFlash('Su grabación ha sido guardada.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('No se podido guardar la grabación.');
            }
        }
    }

    public function edit($id = null) {

        $this->layout = 'home';

        $this->SpeechData->id = $id;

        $speechs = $this->SpeechData->Speech->find('list');

        $this->set('speechs', $speechs);

        $words = $this->SpeechData->Word->find('list');

        $this->set('words', $words);

        if ($this->request->is('get')) {
            $this->request->data = $this->SpeechData->read();
        } else {
            if ($this->SpeechData->save($this->request->data)) {
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
        if ($this->SpeechData->delete($id)) {
            $this->Session->setFlash('La grabación con el codigo: ' . $id . ' ah sido retirada.');
            $this->redirect(array('action' => 'index'));
        }
    }

}

?>
