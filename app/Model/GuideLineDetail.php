<?php

class GuideLineDetail extends AppModel {
    
    var $useTable = 'GuidelineDetail';
    
    public $primaryKey = 'PK_guidelineDetail';
    
    public $belongsTo = array(
        'Speech' => array(
            'className' => 'Speech',
            'foreignKey' => 'FK_speech'            
        ),
        'GuideLineCategory' => array(
            'className' => 'GuideLineCategory',
            'foreignKey' => 'FK_guidelineCategory'            
        )
    );
    
}

?>
