<div id="content" class="xfluid">		
    <div class="portlet x12">
    <div class="portlet-header"><h4>Palabras Clave</h4></div>
    <br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->Html->link('Agregar Palabras Clave', array('controller' => 'word', 'action' => 'add'), array('class' => 'btn')); ?>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->Session->flash(); ?>
			
    <div class="portlet-content">

        <table cellpadding="0" cellspacing="0" border="0" class="display" rel="datatable" id="example">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Palabra</th>
                    <th>Acciones</th>
                </tr>	
            </thead>
            <tbody>
            <?php foreach ($words as $data): ?>
            <tr class="gradeA">
                    <td><?php echo $data['Word']['PK_word']; ?></td>
                    <td><?php echo $data['Word']['Word']; ?></td> 
                    <td><?php echo $this->Html->image('update.png', array('url' => array('controller' => 'word', 'action' => 'edit', $data['Word']['PK_word']))); 
                                                  echo "&nbsp;&nbsp;&nbsp;".$this->Form->postLink($this->Html->image('delete.png', array('alt' => 'delete')), 
                                                                  array('action' => 'delete', $data['Word']['PK_word']), 
                                                                  array('confirm' => '¿Esta seguro?', 'escape' => false)); ?></td>                                    
            </tr>
            <?php endforeach; ?>
            <?php unset($words); ?>
            </tbody>
        </table>
    </div>
</div>
</div>