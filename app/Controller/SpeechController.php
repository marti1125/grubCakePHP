<?php

class SpeechController extends AppController {

    public $helpers = array('Html', 'Form');

    public function index() {

        $this->layout = 'home';

        $this->set('speeches', $this->Speech->find('all'));
    }

}

?>
