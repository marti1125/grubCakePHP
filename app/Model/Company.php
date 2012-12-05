<?php

class Company extends AppModel {
    
    public $primaryKey = 'PK_company';

    var $useTable = 'Company';
    
    public $displayField = 'company';
    
    public $hasMany = array(
        'CallCenter' => array(
            'foreignKey' => 'FK_company'
        ),
        'CompanyArea' => array(
            'foreignKey' => 'FK_company'
        )
    );

}

?>
