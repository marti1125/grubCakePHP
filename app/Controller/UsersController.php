<?php

class UsersController extends AppController {

    public $name = 'User';

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('add');
    }

    public function isAuthorized($user) {
        if ($user['role'] == 'admin') {
            return true;
        }
        if (in_array($this->action, array('edit', 'delete'))) {
            if ($user['id'] != $this->request->params['pass'][0]) {
                return false;
            }
        }
        return true;
    }

    public function index() {
        //$users = $this->User->find('all');
        //$this->set('user', $users);
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
        if ($this->request->is('users')) {
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

}

?>
