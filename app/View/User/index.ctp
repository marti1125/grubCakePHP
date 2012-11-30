<div id="content" class="xfluid">		
    <div class="portlet x12">
        <div class="portlet-header"><h4>Usuarios</h4></div>
        <br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->Html->link('Agregar Usuario', array('controller' => 'users', 'action' => 'add'), array('class' => 'btn')); ?>
        <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->Session->flash(); ?>

        <div class="portlet-content">

            <table cellpadding="0" cellspacing="0" border="0" class="display" rel="datatable" id="example">
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Usuario</th> 
                        <th>Contraseña</th>
                        <th>Rol</th>
                        <th>Acción</th>                        
                    </tr>	
                </thead>
                <tbody>
                    <?php foreach ($users as $data): ?>
                        <tr class="gradeA">
                            <td><?php echo $data['User']['userId']; ?></td>
                            <td><?php echo $data['User']['username']; ?></td>
                            <td><?php echo $data['User']['password']; ?></td>
                            <td><?php echo $data['User']['role']; ?></td>
                            <td><?php 
                                echo $this->Html->image('update.png', array('url' => array('controller' => 'users', 'action' => 'edit', $data['User']['userId'])));
                                ?>
                                <?php
                                echo "&nbsp;&nbsp;&nbsp;".$this->Form->postLink($this->Html->image('delete.png', array('alt' => 'delete')), 
                                              array('action' => 'delete', $data['User']['userId']), 
                                              array('confirm' => '¿Esta seguro?', 'escape' => false));                              
                                ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    <?php unset($users); ?>
                </tbody>
            </table>
            
        </div>
    </div>
</div>

