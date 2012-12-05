<div id="content" class="xfluid">		
    <div class="portlet x12">
    <div class="portlet-header"><h4>Audios</h4></div>
    <br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->Html->link('Agregar Audio', array('controller' => 'audio', 'action' => 'add'), array('class' => 'btn')); ?>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->Session->flash(); ?>
			
    <div class="portlet-content">

        <table >
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Archivo</th>
                    <th>Directorio</th>
                    <th>Segundos</th>	
                    <th>Estado</th>
                    <th>Imagen</th>
                    <th>Grabación</th>
                    <th>Servidor</th>
                    <th>Acciones</th>
                </tr>	
            </thead>
            <tbody>
            <?php foreach ($audio as $data): ?>
            <tr class="gradeA">
                    <td><?php echo $data['Audio']['PK_audio']; ?></td>
                    <td><?php echo $data['Audio']['fileName']; ?></td>
                    <td><?php echo $data['Audio']['dirName']; ?></td>
                    <td><?php echo $data['Audio']['seconds']; ?></td>
                    <td><?php echo $data['Audio']['status']; ?></td>
                    <td><?php echo $data['Audio']['thumbnail']; ?></td>
                    <td><?php echo $data['Record']['numCallerid']; ?></td>
                    <td><?php echo $data['FileServer']['hostName']; ?></td> 
                    <td><?php 
                    echo $this->Html->image('update.png', array('url' => array('controller' => 'audio', 'action' => 'edit', $data['Audio']['PK_audio'])));
                    ?>
                    <?php
                    echo "&nbsp;&nbsp;&nbsp;".$this->Form->postLink($this->Html->image('delete.png', array('alt' => 'delete')), 
                                  array('action' => 'delete', $data['Audio']['PK_audio']), 
                                  array('confirm' => '¿Esta seguro?', 'escape' => false));                              
                    ?></td>
            </tr>
            <?php endforeach; ?>
            <?php unset($audio); ?>
            </tbody>
        </table>
        <?php echo $this->Paginator->numbers(array('first' => 'First page'));?> 
    </div>
</div>
</div>