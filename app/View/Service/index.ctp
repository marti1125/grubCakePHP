<div id="content" class="xfluid">		
    <div class="portlet x12">
    <div class="portlet-header"><h4>Servicios</h4></div>
    <br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->Html->link('Agregar Servicio', array('controller' => 'service', 'action' => 'add'), array('class' => 'btn')); ?>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php //echo $this->Session->flash(); ?>
			
    <div class="portlet-content">

        <table cellpadding="0" cellspacing="0" border="0" class="display" rel="datatable" id="example">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Servicio</th>
                    <th>Activo</th>
                    <th>Codigo del sistema</th>
                    <th>Acción</th>
                </tr>	
            </thead>
            <tbody>
            <?php foreach ($services as $data): ?>
            <tr class="gradeA">
                    <td><?php echo $data['Service']['PK_service']; ?></td>
                    <td><?php echo $data['Service']['service']; ?></td>
                    <td><?php echo $data['Service']['active']; ?></td> 
                    <td><?php echo $data['Service']['sysCode']; ?></td> 
                    <td><?php echo $this->Html->image('update.png', array('url' => array('controller' => 'service', 'action' => 'edit', $data['Service']['PK_service']))); 
                                                  echo "&nbsp;&nbsp;&nbsp;".$this->Form->postLink($this->Html->image('delete.png', array('alt' => 'delete')), 
                                                                  array('action' => 'delete', $data['Service']['PK_service']), 
                                                                  array('confirm' => '¿Esta seguro?', 'escape' => false)); ?></td>                                    
            </tr>
            <?php endforeach; ?>
            <?php unset($services); ?>
            </tbody>
        </table>
    </div>
</div>
</div>