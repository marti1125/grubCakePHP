<div id="content" class="xfluid">		
    <div class="portlet x12">
    <div class="portlet-header"><h4>Areas de la Compañia</h4></div>
    <br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->Html->link('Agregar area', array('controller' => 'companyarea', 'action' => 'add'), array('class' => 'btn')); ?>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php //echo $this->Session->flash(); ?>
			
    <div class="portlet-content">

        <table cellpadding="0" cellspacing="0" border="0" class="display" rel="datatable" id="example">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Area</th>
                    <th>Compañia</th>
                    <th>Acción</th>
                </tr>	
            </thead>
            <tbody>
            <?php foreach ($compyareas as $data): ?>
            <tr class="gradeA">
                    <td><?php echo $data['CompanyArea']['PK_companyArea']; ?></td>
                    <td><?php echo $data['CompanyArea']['area']; ?></td>
                    <td><?php echo $data['Company']['company']; ?></td> 
                    <td><?php echo $this->Html->image('update.png', array('url' => array('controller' => 'companyarea', 'action' => 'edit', $data['CompanyArea']['PK_companyArea']))); 
                                                  echo "&nbsp;&nbsp;&nbsp;".$this->Form->postLink($this->Html->image('delete.png', array('alt' => 'delete')), 
                                                                  array('action' => 'delete', $data['CompanyArea']['PK_companyArea']), 
                                                                  array('confirm' => '¿Esta seguro?', 'escape' => false)); ?></td>                                    
            </tr>
            <?php endforeach; ?>
            <?php unset($compyareas); ?>
            </tbody>
        </table>
    </div>
</div>
</div>