<?php

class CompanyArea extends AppModel {
    
    var $useTable = 'CompanyArea';
    
    public $primaryKey = 'PK_companyArea';
    
    public $belongsTo = array(
        'Company' => array(
            'className' => 'Company',
            'foreignKey' => 'FK_company'            
        )
    );
    
    public $displayField = 'area';
    
    public $hasMany = array(
        'ExtesionNumber' => array (
            'className' => 'ExtesionNumber',
            'foreignKey'    => 'FK_companyArea'           
        )
    );
    
}

?>
