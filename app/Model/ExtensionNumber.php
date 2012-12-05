<?php

class ExtensionNumber extends AppModel {
    
    var $useTable = 'ExtensionNumber';
    
    public $primaryKey = 'PK_extensionNumber';
    
    public $belongsTo = array(
        'CallCenter' => array(
            'className' => 'CallCenter',
            'foreignKey' => 'FK_callcenter'            
        ),
        'Agent' => array(
            'className' => 'Agent',
            'foreignKey' => 'FK_agent'            
        ),
        'CompanyArea' => array(
            'className' => 'CompanyArea',
            'foreignKey' => 'FK_companyArea'            
        )
    );
    
}

?>
