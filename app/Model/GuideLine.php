<?php

class GuideLine extends AppModel {

    var $useTable = 'Guideline';
    
    public $primaryKey = 'PK_guideline';
    
    public $displayField = 'guideline';
    
    public $hasMany = array(
        'GuideLineCategory' => array(
            'className' => 'GuideLineCategory',
            'foreignKey' => 'FK_guideline'
        )
    );

}

?>
