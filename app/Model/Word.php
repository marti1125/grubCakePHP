<?php

class Word extends AppModel {

    var $useTable = 'Word';
    
    public $primaryKey = 'PK_word';
    
    public $displayField = 'Word';
    
    public $hasMany = array(
        'WordVariant' => array(
            'className' => 'WordVariant',
            'foreignKey' => 'FK_word'
        ),
        'SpeechData' => array(
            'className' => 'SpeechData',
            'foreignKey' => 'FK_word'
        ),
        'FilterRuleDetail' => array(
            'className' => 'FilterRuleDetail',
            'foreignKey' => 'FK_word'
        )
    );

}

?>
