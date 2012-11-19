<?php

class CallCenter extends AppModel {

    public $primaryKey = 'PK_callcenter';
    
    var $useTable = 'CallCenter';
    
    public $belongsTo = array(
        'Company' => array(
            'className' => 'Company',
            'foreignKey' => 'FK_company',
            'type' => 'inner'
        )
    );

}

?>
