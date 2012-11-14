<?php

class AudioController extends AppController {

    public $helpers = array('Html', 'Form');

    public function index() {
        
        $this->layout = 'home';
        
        $this->set('audio', $this->Audio->find('all'));
        
    }

}

?>
