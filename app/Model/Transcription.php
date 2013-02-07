<?php

class Transcription extends AppModel {
    
    var $useTable = 'Transcription';
    
    public $primaryKey = 'PK_transcription';
    
    public $belongsTo = array(
        'Audio' => array(
            'className' => 'Audio',
            'foreignKey' => 'FK_audio'            
        )
    );
    
}

?>
