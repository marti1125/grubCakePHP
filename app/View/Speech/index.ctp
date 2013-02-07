<div id="content" class="xfluid">		
    <div class="portlet x12">
    <div class="portlet-header"><h4>Speech</h4></div>
    <br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->Html->link('Agregar Speech', array('controller' => 'speech', 'action' => 'add'), array('class' => 'btn')); ?>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->Session->flash(); ?>
			
    <div class="portlet-content">

        <table cellpadding="0" cellspacing="0" border="0" class="display" rel="datatable" id="example">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Speech</th>
                    <th>Acciones</th>
                </tr>	
            </thead>
            <tbody>
            <?php foreach ($speeches as $speech): ?>
            <tr class="gradeA">
                    <td><?php echo $speech['Speech']['PK_speech']; ?></td>
                    <td><?php echo $speech['Speech']['speech']; ?></td> 
                    <td><?php echo $this->Html->image('update.png', array('url' => array('controller' => 'speech', 'action' => 'edit', $speech['Speech']['PK_speech']))); 
                                                  echo "&nbsp;&nbsp;&nbsp;".$this->Form->postLink($this->Html->image('delete.png', array('alt' => 'delete')), 
                                                                  array('action' => 'delete', $speech['Speech']['PK_speech']), 
                                                                  array('confirm' => '¿Esta seguro?', 'escape' => false)); ?></td>                                    
            </tr>
            <?php endforeach; ?>
            <?php unset($speeches); ?>
            </tbody>
        </table>
    </div>
</div>
</div>