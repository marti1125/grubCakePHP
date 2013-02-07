<div id="content" class="xfluid">		
    <div class="portlet x12">
    <div class="portlet-header"><h4>Linea Guia</h4></div>
    <br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->Html->link('Agregar Linea Guia', array('controller' => 'guideline', 'action' => 'add'), array('class' => 'btn')); ?>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php //echo $this->Session->flash(); ?>
			
    <div class="portlet-content">

        <table cellpadding="0" cellspacing="0" border="0" class="display" rel="datatable" id="example">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Linea Guia</th>
                    <th>Origen</th>
                    <th>Acción</th>
                </tr>	
            </thead>
            <tbody>
            <?php foreach ($guidelines as $data): ?>
            <tr class="gradeA">
                    <td><?php echo $data['GuideLine']['PK_guideline']; ?></td>
                    <td><?php echo $data['GuideLine']['guideline']; ?></td>
                    <td><?php echo $data['GuideLine']['sourcetext']; ?></td> 
                    <td><?php echo $this->Html->image('update.png', array('url' => array('controller' => 'guideline', 'action' => 'edit', $data['GuideLine']['PK_guideline']))); 
                                                  echo "&nbsp;&nbsp;&nbsp;".$this->Form->postLink($this->Html->image('delete.png', array('alt' => 'delete')), 
                                                                  array('action' => 'delete', $data['GuideLine']['PK_guideline']), 
                                                                  array('confirm' => '¿Esta seguro?', 'escape' => false)); ?></td>                                    
            </tr>
            <?php endforeach; ?>
            <?php unset($guidelines); ?>
            </tbody>
        </table>
    </div>
</div>
</div>