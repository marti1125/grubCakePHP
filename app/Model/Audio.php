<?php

class Audio extends AppModel {

    var $useTable = 'Audio';
    
    public $primaryKey = 'PK_audio';
    
    public $displayField = 'fileName';
    
    public $belongsTo = array(
        'Record' => array(
            'className' => 'Record',
            'foreignKey' => 'FK_record'            
        ),
        'FileServer' => array(
            'className' => 'FileServer',
            'foreignKey' => 'FK_fileserver'            
        )
    );
    
    public $hasMany = array(
        'Transcription' => array (
            'className' => 'Transcription',
            'foreignKey'    => 'FK_audio'           
        )
    );

}

?>
