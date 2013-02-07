<div id="content" class="xfluid">		
    <div class="portlet x12">
    <div class="portlet-header"><h4>Filtros</h4></div>
    <br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->Html->link('Agregar Filtro', array('controller' => 'filterrule', 'action' => 'add'), array('class' => 'btn')); ?>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php //echo $this->Session->flash(); ?>
			
    <div class="portlet-content">

        <table cellpadding="0" cellspacing="0" border="0" class="display" rel="datatable" id="example">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Filtro</th>
                    <th>Speech</th>
                    <th>Acciones</th>
                </tr>	
            </thead>
            <tbody>
            <?php foreach ($filterrules as $data): ?>
            <tr class="gradeA">
                    <td><?php echo $data['FilterRule']['PK_filterRule']; ?></td>
                    <td><?php echo $data['FilterRule']['filterRule']; ?></td>
                    <td><?php echo $data['Speech']['speech']; ?></td> 
                    <td><?php echo $this->Html->image('update.png', array('url' => array('controller' => 'filterrule', 'action' => 'edit', $data['FilterRule']['PK_filterRule']))); 
                                                  echo "&nbsp;&nbsp;&nbsp;".$this->Form->postLink($this->Html->image('delete.png', array('alt' => 'delete')), 
                                                                  array('action' => 'delete', $data['FilterRule']['PK_filterRule']), 
                                                                  array('confirm' => '¿Esta seguro?', 'escape' => false)); ?></td>                                    
            </tr>
            <?php endforeach; ?>
            <?php unset($filterrules); ?>
            </tbody>
        </table>
    </div>
</div>
</div>