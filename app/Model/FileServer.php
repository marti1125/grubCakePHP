<?php

class FileServer extends AppModel {
    
    public $primaryKey = 'Pk_fileserver';
    
    var $useTable = 'Fileserver';
    
    public $displayField = 'hostName';
    
    public $hasMany = array(
        'Record' => array (
            'foreignKey'    => 'FK_fileserver'
        ),
        'Audio' => array (
            'foreignKey'    => 'FK_fileserver'
        )
    );  
    
}

?>
