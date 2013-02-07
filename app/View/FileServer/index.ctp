<div id="content" class="xfluid">		
    <div class="portlet x12">
        <div class="portlet-header"><h4>Grabaciones</h4></div>
        <br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->Html->link('Agregar File Server', array('controller' => 'fileserver', 'action' => 'add'), array('class' => 'btn')); ?>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->Session->flash(); ?>

        <div class="portlet-content">

            <!--table cellpadding="0" cellspacing="0" border="0" class="display" rel="datatable" id="example"-->
            <table>
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>IP</th> 
                        <th>Username</th>
                        <th>Password</th>
                        <th>UNC</th>
                        <th>FTP</th>
                        <th>HostName</th>
                        <th>Acción</th>
                    </tr>	
                </thead>
                <tbody>
                    <?php foreach ($file as $data): ?>
                        <tr class="gradeA">
                            <td><?php echo $data['FileServer']['Pk_fileserver']; ?></td>
                            <td><?php echo $data['FileServer']['ip4']; ?></td>
                            <td><?php echo $data['FileServer']['username']; ?></td>
                            <td><?php echo $data['FileServer']['pass']; ?></td>
                            <td><?php echo $data['FileServer']['enableUNC']; ?></td>
                            <td><?php echo $data['FileServer']['enableFTP']; ?></td>
                            <td><?php echo $data['FileServer']['hostName']; ?></td>
                            <td><?php echo $this->Html->image('update.png', array('url' => array('controller' => 'fileserver', 'action' => 'edit', $data['FileServer']['Pk_fileserver'])));
                                      echo "&nbsp;&nbsp;&nbsp;".$this->Form->postLink($this->Html->image('delete.png', array('alt' => 'delete')), 
                                              array('action' => 'delete', $data['FileServer']['Pk_fileserver']), 
                                              array('confirm' => '¿Esta seguro?', 'escape' => false));                         
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
<?php //echo $this->element('sql_dump'); ?>