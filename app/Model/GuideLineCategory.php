<?php

class GuideLineCategory extends AppModel {
    
    var $useTable = 'GuidelineCategory';
    
    public $primaryKey = 'PK_guidelineCategory';
    
    public $belongsTo = array(
        'GuideLine' => array(
            'className' => 'GuideLine',
            'foreignKey' => 'FK_guideline'            
        )
    );
    
    public $displayField = 'categoryName';
    
    public $hasMany = array(
        'GuidelineDetail' => array(
            'className' => 'GuidelineDetail',
            'foreignKey' => 'PK_guidelineCategory'
        )
    );
    
}

?>
