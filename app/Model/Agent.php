<?php

class Agent extends AppModel {
    
    var $useTable = 'Agent';
    
    public $primaryKey = 'PK_agent';
    
    public $displayField = 'agentId';
    
    public $hasMany = array(
        'ExtesionNumber' => array (
            'className' => 'ExtesionNumber',
            'foreignKey'    => 'FK_agent'           
        )
    );
    
}

?>
