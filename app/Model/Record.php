<?php

class Record extends AppModel {
    
    //public $actsAs = array('Containable');
    
    var $useTable = 'Record';
    
    public $primaryKey = 'PK_record';
    
    public $displayField = 'numCallerid';
    
    public $hasMany = array(
        'Audio' => array (
            'className' => 'Audio',
            'foreignKey'    => 'FK_record'           
        )
    );
    
    /*public $actsAs = array(
        'Upload.Upload' => array(
            'fileSource'
        )
    );*/
    
    public $belongsTo = array(
        'FileServer' => array(
            'className' => 'FileServer',
            'foreignKey' => 'FK_fileserver'
            /*,
            'type' => 'inner'*/
        )
    );
    
    public $validate = array(
        'numCallerid' => array('rule' => 'notEmpty'),
        'dirSource' => array('rule' => 'notEmpty'),
        'indexed' => array('rule' => 'notEmpty'),
        'FK_fileserver' => array('rule' => 'notEmpty')
    ); 
    
    

}

?>
