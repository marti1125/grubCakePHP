<?php

class Speech extends AppModel {

    var $useTable = 'Speech';
    
    public $primaryKey = 'PK_speech';
    
    public $displayField = 'speech';
    
    public $hasMany = array(
        'SpeechData' => array(
            'className' => 'SpeechData',
            'foreignKey' => 'FK_speech'
        ),
        'GuidelineDetail' => array(
            'className' => 'GuidelineDetail',
            'foreignKey' => 'FK_speech'
        ),
        'FilterRule' => array(
            'className' => 'FilterRule',
            'foreignKey' => 'FK_speech'
        )
    );

}

?>
