<div id="content" class="xfluid">

    <div class="portlet x9">
        
        <div class="portlet-header"><h4>Actualizar File Server</h4></div>
        <?php echo $this->Session->flash(); ?>
        <div class="portlet-content">

            <?php
            echo $this->Form->create('FileServer', array('class' => 'formulario'), array('action' => 'edit'));            
            echo "<div class=fieldadd>" . $this->Form->input('ip4', array('type' => 'text', 'label' => 'IP')) . "</div>";
            echo "<div class=fieldadd>" . $this->Form->input('username', array('type' => 'text','label' => 'Username')) . "</div>"; 
            echo "<div class=fieldadd>" . $this->Form->input('pass', array('type' => 'text','label' => 'Password')) . "</div>";
            echo "<div class=fieldadd>" . $this->Form->input('enableUNC', array('type' => 'text', 'label' => 'UNC')) . "</div>";
            echo "<div class=fieldadd>" . $this->Form->input('enableFTP', array('type' => 'text', 'label' => 'FTP'),array('class' => 'medium')) . "</div>";     
            echo "<div class=fieldadd>" . $this->Form->input('hostName', array('label' => 'HostName')). "</div>";            
            echo $this->Form->submit('Actualizar File Server', array('class' => 'btn'));
            ?>
            <?php echo $this->Html->link('Cancelar', array('controller' => 'fileserver', 'action' => 'index'), array('class' => 'btn')); ?>
            
        </div>

    </div>

</div>