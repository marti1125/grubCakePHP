<?php

class UsersController extends AppController {

    public $name = 'User';

    public $helpers = array('Html', 'Form');    

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('add', 'index');
    }

    public function isAuthorized($user) {
        if ($user['role'] == 'admin') {
            return true;
        }
        if (in_array($this->action, array('edit', 'delete', 'index'))) {
            if ($user['userId'] != $this->request->params['pass'][0]) {
                return false;
            }
        }
        return true;
    }

    public function index() {

        $this->layout = 'home';

        $this->set('users', $this->User->find('all'));
    }

    public function login() {

        $this->layout = 'login';

        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                $this->redirect($this->Auth->redirect());
            } else {
                $this->Session->setFlash(__('Usuario o Contraseña invalida, intente de nuevo '));
            }
        }
    }

    public function add() {
        
        $this->layout = 'home';
        
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        }
    }

    public function logout() {
        $this->redirect($this->Auth->logout());
    }

    public function edit($id = null) {

        $this->layout = 'home';

        $this->User->id = $id;
        if ($this->request->is('get')) {
            $this->request->data = $this->User->read();
        } else {
            if ($this->User->save($this->request->data)) {
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
        if ($this->User->delete($id)) {
            $this->Session->setFlash('el usuario con el codigo: ' . $id . ' ah sido retirada.');
            $this->redirect(array('action' => 'index'));
        }
    }

}

?>
