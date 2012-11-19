<div id="content" class="xfluid">		
    <div class="portlet x12">
        <div class="portlet-header"><h4>Grabaciones</h4></div>
        <br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->Html->link('Agregar Grabación', array('controller' => 'record', 'action' => 'add'), array('class' => 'btn')); ?>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->Session->flash(); ?>

        <div class="portlet-content">

            <table cellpadding="0" cellspacing="0" border="0" class="display" rel="datatable" id="example">
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Numero</th> 
                        <th>Archivo</th>
                        <th>Directorio</th>
                        <th>Indice</th>
                        <th>Fuente</th>
                        <th>Servidor</th>
                        <th>Acción</th>
                    </tr>	
                </thead>
                <tbody>
                    <?php foreach ($record as $data): ?>
                        <tr class="gradeA">
                            <td><?php echo $data['Record']['PK_record']; ?></td>
                            <td><?php echo $data['Record']['numCallerid']; ?></td>
                            <td><?php echo $data['Record']['fileSource']; ?></td>
                            <td><?php echo $data['Record']['dirSource']; ?></td>
                            <td><?php echo $data['Record']['indexed']; ?></td>
                            <td><?php echo $data['Record']['dateFileSource']; ?></td>
                            <td><?php echo $data['FileServer']['hostName']; ?></td>
                            <td><?php echo $this->Html->link('Actualizar', array('action' => 'edit', $data['Record']['PK_record'])); ?>
                                <?php
                                echo $this->Form->postLink('Eliminar', array('action' => 'delete', $data['Record']['PK_record']), array('confirm' => '¿Esta seguro?'));
                                ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    <?php unset($record); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>