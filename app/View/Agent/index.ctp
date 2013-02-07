<div id="content" class="xfluid">		
    <div class="portlet x12">
    <div class="portlet-header"><h4>Agentes</h4></div>
    <br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->Html->link('Agregar Agente', array('controller' => 'agent', 'action' => 'add'), array('class' => 'btn')); ?>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->Session->flash(); ?>
			
    <div class="portlet-content">

        <table cellpadding="0" cellspacing="0" border="0" class="display" rel="datatable" id="example">
            <thead>
                <tr>
                    <th>Compañia</th>
                    <th>Agente</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>	
                    <th>Fecha de Creación</th>
                    <th>Estado</th>
                    <th>Ultimo ingreso</th>
                    <th>Contraseña</th>
                    <th>Imagen</th>
                    <th>Posición</th>
                    <th>Acciones</th>
                </tr>	
            </thead>
            <tbody>
            <?php foreach ($agent as $data): ?>
            <tr class="gradeA">
                    <td><?php echo $data['Agent']['PK_agent']; ?></td>
                    <td><?php echo $data['Agent']['agentId']; ?></td>
                    <td><?php echo $data['Agent']['firstName']; ?></td>
                    <td><?php echo $data['Agent']['lastName']; ?></td>
                    <td><?php echo $data['Agent']['created']; ?></td>
                    <td><?php echo $data['Agent']['disabled']; ?></td>
                    <td><?php echo $data['Agent']['lastlogin']; ?></td>
                    <td><?php echo $data['Agent']['password']; ?></td>
                    <td><?php echo $data['Agent']['fileImage']; ?></td>
                    <td><?php echo $data['Agent']['position']; ?></td>
                    <td><?php echo $this->Html->image('update.png', array('url' => array('controller' => 'agent', 'action' => 'edit', $data['Agent']['PK_agent']))); 
                              echo "&nbsp;&nbsp;&nbsp;".$this->Form->postLink($this->Html->image('delete.png', array('alt' => 'delete')), 
                                              array('action' => 'delete', $data['Agent']['PK_agent']), 
                                              array('confirm' => '¿Esta seguro?', 'escape' => false)); ?></td>
            </tr>
            <?php endforeach; ?>
            <?php unset($agents); ?>
            </tbody>
        </table>
    </div>
</div>
</div>