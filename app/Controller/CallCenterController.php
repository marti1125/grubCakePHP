<?php

class CallCenterController extends AppController {

    public $helpers = array('Html', 'Form');

    public function index() {

        $options['joins'] = array(
            array('table' => 'companies',
                'alias' => 'Companies',
                'type' => 'LEFT',
                'conditions' => array(
                    'Companies.PK_company = CallCenter.FK_company',
                )
            )
        );

        $options['conditions'] = array(
            'Companies.company' => 'Atento'
        );

        $this->layout = 'home';

        $this->set('callcenters', $this->CallCenter->find('all', $options));
    }

}

?>
