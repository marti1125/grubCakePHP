<?php

class TranscriptionController extends AppController {

    public $helpers = array('Html', 'Form');

    public function index() {

        $this->layout = 'home';

        $this->Transcription->recursive = 1;

        $transcriptions = $this->Transcription->find('all');

        $this->set('transcriptions', $transcriptions);
    }

    public function add() {

        $this->layout = 'home';

        $transcriptions = $this->Transcription->Audio->find('list');

        $this->set('transcriptions', $transcriptions);

        if ($this->request->is('post')) {
            $this->Transcription->create();
            if ($this->Transcription->save($this->request->data)) {
                $this->Session->setFlash('Su grabación ha sido guardada.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('No se podido guardar la grabación.');
            }
        }
    }

    public function edit($id = null) {

        $this->layout = 'home';

        $this->Transcription->id = $id;

        $transcriptions = $this->Transcription->Audio->find('list');

        $this->set('transcriptions', $transcriptions);

        if ($this->request->is('get')) {
            $this->request->data = $this->Transcription->read();
        } else {
            if ($this->Transcription->save($this->request->data)) {
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
        if ($this->Transcription->delete($id)) {
            $this->Session->setFlash('La grabación con el codigo: ' . $id . ' ah sido retirada.');
            $this->redirect(array('action' => 'index'));
        }
    }

}

?>
