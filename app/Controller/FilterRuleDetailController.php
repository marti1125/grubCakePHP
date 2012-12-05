<?php

class FilterRuleDetailController extends AppController {

    public $helpers = array('Html', 'Form');

    public function index() {

        $this->layout = 'home';        

        $frdetails = $this->FilterRuleDetail->find('all');

        $this->set('frdetails', $frdetails);
    }

    public function add() {

        $this->layout = 'home';

        $filterules = $this->FilterRuleDetail->FilterRule->find('list');

        $this->set('filterules', $filterules);
        
        $words = $this->FilterRuleDetail->Word->find('list');

        $this->set('words', $words);

        if ($this->request->is('post')) {
            $this->FilterRuleDetail->create();
            if ($this->FilterRuleDetail->save($this->request->data)) {
                $this->Session->setFlash('Su grabación ha sido guardada.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('No se podido guardar la grabación.');
            }
        }
    }

    public function edit($id = null) {

        $this->layout = 'home';

        $this->WordVariant->id = $id;

        $filterules = $this->FilterRuleDetail->FilterRule->find('list');

        $this->set('filterules', $filterules);
        
        $words = $this->FilterRuleDetail->Word->find('list');

        $this->set('words', $words);

        if ($this->request->is('get')) {
            $this->request->data = $this->FilterRuleDetail->read();
        } else {
            if ($this->FilterRuleDetail->save($this->request->data)) {
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
        if ($this->FilterRuleDetail->delete($id)) {
            $this->Session->setFlash('La grabación con el codigo: ' . $id . ' ah sido retirada.');
            $this->redirect(array('action' => 'index'));
        }
    }

}

?>
