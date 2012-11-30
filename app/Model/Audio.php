<?php

class Audio extends AppModel {

    var $useTable = 'Audio';
    
    public $primaryKey = 'PK_audio';
    
    //public $actsAs = array('Containable');
    
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

}

?>
