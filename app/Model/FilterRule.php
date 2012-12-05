<?php

class FilterRule extends AppModel {
    
    var $useTable = 'FilterRule';
    
    public $primaryKey = 'PK_filterRule';
    
    public $belongsTo = array(
        'Speech' => array(
            'className' => 'Speech',
            'foreignKey' => 'FK_speech'            
        )
    );
    
    public $displayField = 'filterRule';
    
    public $hasMany = array(
        'FilterRuleDetail' => array (
            'className' => 'FilterRuleDetail',
            'foreignKey'    => 'FK_filterRule'           
        )
    );
    
}

?>
