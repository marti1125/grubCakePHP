<div id="content" class="xfluid">		
    <div class="portlet x12">
    <div class="portlet-header"><h4>Detalle de Filtro</h4></div>
    <br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->Html->link('Agregar Detalle', array('controller' => 'filterruledetail', 'action' => 'add'), array('class' => 'btn')); ?>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php //echo $this->Session->flash(); ?>
			
    <div class="portlet-content">

        <table cellpadding="0" cellspacing="0" border="0" class="display" rel="datatable" id="example">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Filtro</th>
                    <th>Palabra Filtrada</th>
                    <th>Orden</th>
                    <th>Prioridad</th>
                    <th>Palabra</th>
                    <th>Acciones</th>
                </tr>	
            </thead>
            <tbody>
            <?php foreach ($frdetails as $data): ?>
            <tr class="gradeA">
                    <td><?php echo $data['FilterRuleDetail']['PK_filterRuleDetail']; ?></td>
                    <td><?php echo $data['FilterRule']['filterRule']; ?></td>
                    <td><?php echo $data['FilterRuleDetail']['filterWord']; ?></td>
                    <td><?php echo $data['FilterRuleDetail']['filterOrder']; ?></td>
                    <td><?php echo $data['FilterRuleDetail']['maxProximity']; ?></td>
                    <td><?php echo $data['Word']['Word']; ?></td>
                    <td><?php echo $this->Html->image('update.png', array('url' => array('controller' => 'filterruledetail', 'action' => 'edit', $data['FilterRuleDetail']['PK_filterRuleDetail']))); 
                                                  echo "&nbsp;&nbsp;&nbsp;".$this->Form->postLink($this->Html->image('delete.png', array('alt' => 'delete')), 
                                                                  array('action' => 'delete', $data['FilterRuleDetail']['PK_filterRuleDetail']), 
                                                                  array('confirm' => '¿Esta seguro?', 'escape' => false)); ?></td>                                    
            </tr>
            <?php endforeach; ?>
            <?php unset($frdetails); ?>
            </tbody>
        </table>
    </div>
</div>
</div>