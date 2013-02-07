<?php

class CallCenter extends AppModel {

    public $primaryKey = 'PK_callcenter';
    
    var $useTable = 'CallCenter';
    
    public $displayField = 'callcenter';
    
    public $hasMany = array(
        'ExtesionNumber' => array (
            'className' => 'ExtesionNumber',
            'foreignKey'    => 'FK_callcenter'           
        )
    );
    
    public $belongsTo = array(
        'Company' => array(
            'className' => 'Company',
            'foreignKey' => 'FK_company',
            'type' => 'inner'
        )
    );

}

?>
