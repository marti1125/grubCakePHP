<?php

class AudioController extends AppController {

    public $helpers = array('Html', 'Form');
    
    public $paginate = array(
        'limit' => 1,
        'order' => array(
            'Record.fileSource' => 'asc'
        )
    );

    public function index() {

        $this->layout = 'home';

        $data = $this->paginate('Audio');

        $this->set('audio', $data);
    }

    public function add() {

        $this->layout = 'home';
        
        $records = $this->Audio->Record->find('list');

        $this->set('records', $records);
        
        $fileservers = $this->Audio->FileServer->find('list');

        $this->set('fileservers', $fileservers);

        if ($this->request->is('post')) {
            $this->Audio->create();
            if ($this->Audio->save($this->request->data)) {
                $this->Session->setFlash('Su grabación ha sido guardada.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('No se podido guardar la grabación.');
            }
        }
    }
    
    public function edit($id = null) {

        $this->layout = 'home';

        $this->Audio->id = $id;

        $records = $this->Audio->Record->find('list');

        $this->set('records', $records);
        
        $fileservers = $this->Audio->FileServer->find('list');

        $this->set('fileservers', $fileservers);

        if ($this->request->is('get')) {
            $this->request->data = $this->Audio->read();
        } else {
            if ($this->Audio->save($this->request->data)) {
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
        if ($this->Audio->delete($id)) {
            $this->Session->setFlash('La grabación con el codigo: ' . $id . ' ah sido retirada.');
            $this->redirect(array('action' => 'index'));
        }
    }

}

?>
