<?php

class AgentController extends AppController {

    public $helpers = array('Html', 'Form');

    public function index() {

        $this->layout = 'home';

        $this->set('agents', $this->Agent->find('all'));
    }

}

?>
