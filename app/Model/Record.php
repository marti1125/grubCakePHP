<?php

class Record extends AppModel {

    var $useTable = 'Record';
    
    public $primaryKey = 'PK_record';  
    
   public $belongsTo = array(
        'FileServer' => array(
            'className'    => 'FileServer',
            'foreignKey'   => 'FK_fileserver',
            'type' => 'inner'
        )
    );
    
    public $validate = array(
        'numCallerid' => array('rule' => 'notEmpty'),
        'dirSource' => array('rule' => 'notEmpty'),        
        'indexed' => array('rule' => 'notEmpty'),
        'FK_fileserver' => array('rule' => 'notEmpty')
    );
    
    public $actsAs = array(
        'Upload.Upload' => array(
            'fileSource'
        )
    );

}

?>
