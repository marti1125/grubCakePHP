<div id="content" class="xfluid">		
    <div class="portlet x12">
    <div class="portlet-header"><h4>Extensiones de Area</h4></div>
    <br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->Html->link('Agregar Extensión', array('controller' => 'extensionnumber', 'action' => 'add'), array('class' => 'btn')); ?>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php //echo $this->Session->flash(); ?>
			
    <div class="portlet-content">

        <table >
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Número</th>
                    <th>CallCenter</th>
                    <th>Agente</th>	
                    <th>Area</th>                                        
                    <th>Acciones</th>
                </tr>	
            </thead>
            <tbody>
            <?php foreach ($extesions as $data): ?>
            <tr class="gradeA">
                    <td><?php echo $data['ExtensionNumber']['PK_extensionNumber']; ?></td>
                    <td><?php echo $data['ExtensionNumber']['extensionNumber']; ?></td>
                    <td><?php echo $data['CallCenter']['callcenter']; ?></td>
                    <td><?php echo $data['Agent']['agentId']; ?></td>
                    <td><?php echo $data['CompanyArea']['area']; ?></td>                                                           
                    <td><?php 
                    echo $this->Html->image('update.png', array('url' => array('controller' => 'extensionnumber', 'action' => 'edit', $data['ExtensionNumber']['PK_extensionNumber'])));
                    ?>
                    <?php
                    echo "&nbsp;&nbsp;&nbsp;".$this->Form->postLink($this->Html->image('delete.png', array('alt' => 'delete')), 
                                  array('action' => 'delete', $data['ExtensionNumber']['PK_extensionNumber']), 
                                  array('confirm' => '¿Esta seguro?', 'escape' => false));                              
                    ?></td>
            </tr>
            <?php endforeach; ?>
            <?php unset($extesions); ?>
            </tbody>
        </table>
        <?php //echo $this->Paginator->numbers(array('first' => 'First page'));?> 
    </div>
</div>
</div>