<div id="content" class="xfluid">		
    <div class="portlet x12">
        <div class="portlet-header"><h4>Grabaciones</h4></div>
        <br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->Html->link('Agregar Grabación', array('controller' => 'record', 'action' => 'add'), array('class' => 'btn')); ?>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->Session->flash(); ?>

        <div class="portlet-content">

            <!--table cellpadding="0" cellspacing="0" border="0" class="display" rel="datatable" id="example"-->
            <table>
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
                            <td><?php echo $this->Html->image('update.png', array('url' => array('controller' => 'record', 'action' => 'edit', $data['Record']['PK_record'])));
                                      echo "&nbsp;&nbsp;&nbsp;".$this->Form->postLink($this->Html->image('delete.png', array('alt' => 'delete')), 
                                              array('action' => 'delete', $data['Record']['PK_record']), 
                                              array('confirm' => '¿Esta seguro?', 'escape' => false));
                           // "&nbsp;&nbsp;&nbsp;".$this->Html->link('Actualizar', array('action' => 'edit', $data['Record']['PK_record']));                                 
                                      //echo "&nbsp;&nbsp;&nbsp;".$this->Form->postLink('Eliminar', array('action' => 'delete', $data['Record']['PK_record']), array('confirm' => '¿Esta seguro?'));                                
                                      //echo "&nbsp;&nbsp;&nbsp;".$this->Html->image('play.png'); 
                                      echo "&nbsp;&nbsp;&nbsp;".$this->Html->image('play.png', array('url' => array('controller' => 'record', 'action' => 'view', $data['Record']['PK_record'])));?>
                            </td>
                        </tr>                        
                    <?php endforeach; ?>
                    <?php unset($record); ?>
                </tbody>
            </table>
            <?php //echo $this->Paginator->sort('PK_record','Lista'); 
            echo $this->Paginator->numbers(array('first' => 'First page'));?>
          <?php //echo $this->Html->media('record/audio1.ogg',array('controls'), array('fullBase' => true, 'text' => 'Fallback text')); ?>
              
        </div>
    </div>
</div>
<?php //echo $this->element('sql_dump'); ?>