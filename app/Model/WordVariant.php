<?php

class WordVariant extends AppModel {
    
    var $useTable = 'WordVariant';
    
    public $primaryKey = 'PK_wordVariant';
    
    public $belongsTo = array(
        'Word' => array(
            'className' => 'Word',
            'foreignKey' => 'FK_word'            
        )
    );
    
}

?>
