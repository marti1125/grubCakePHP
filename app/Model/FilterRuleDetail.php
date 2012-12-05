<?php

class FilterRuleDetail extends AppModel {
    
    var $useTable = 'FilterRuleDetail';
    
    public $primaryKey = 'PK_filterRuleDetail';
    
    public $belongsTo = array(
        'FilterRule' => array(
            'className' => 'FilterRule',
            'foreignKey' => 'FK_filterRule'            
        ),
        'Word' => array(
            'className' => 'Word',
            'foreignKey' => 'FK_word'            
        )
    );
    
    
}

?>
