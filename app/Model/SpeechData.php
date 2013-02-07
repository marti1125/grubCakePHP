<?php

class SpeechData extends AppModel {
    
    var $useTable = 'SpeechData';
    
    public $primaryKey = 'PK_speechData';
    
    public $belongsTo = array(
        'Speech' => array(
            'className' => 'Speech',
            'foreignKey' => 'FK_speech'            
        ),
        'Word' => array(
            'className' => 'Word',
            'foreignKey' => 'FK_word'            
        )
    );
    
    
}

?>
