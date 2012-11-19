<?php

class CallCenterController extends AppController {

    public $helpers = array('Html', 'Form');

    public function index() {

        $this->layout = 'home';
        
        $this->CallCenter->recursive = 1;
        
        $callcenters = $this->CallCenter->find('all');
        
        $this->set('callcenters', $callcenters);

        //$this->set('callcenters', $this->CallCenter->find('all'));
    }

}

?>
