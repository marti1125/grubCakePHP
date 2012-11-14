<?php

class CompanyController extends AppController {

    public $helpers = array('Html', 'Form');

    public function index() {

        $this->layout = 'home';
        
        $this->set('company', $this->Company->find('all'));
        
    }

}

?>
