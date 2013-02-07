<div id="content" class="xfluid">

    <div class="portlet x9">
        
        <div class="portlet-header"><h4>Agregar  Grabación</h4></div>
        <?php echo $this->Session->flash(); ?>
        <div class="portlet-content">

            <?php
            echo $this->Form->create('Audio', array('class' => 'formulario'));            
            echo "<div class=fieldadd>" . $this->Form->input('fileName', array('type' => 'text', 'label' => 'Archivo')) . "</div>";
            echo "<div class=fieldadd>" . $this->Form->input('dirName', array('type' => 'text','label' => 'Directorio')) . "</div>"; 
            echo "<div class=fieldadd>" . $this->Form->input('seconds', array('type' => 'text','label' => 'Segundos')) . "</div>";
            echo "<div class=fieldadd>" . $this->Form->input('status', array('type' => 'text', 'label' => 'Estado')) . "</div>";
            echo "<div class=fieldadd>" . $this->Form->input('thumbnail', array('label' => 'Imagen'),array('class' => 'medium')) . "</div>";     
            echo "<div class=fieldadd>" . $this->Form->input('FK_record', array('label' => 'Grabaciones','options' => $records)). "</div>";
            echo "<div class=fieldadd>" . $this->Form->input('FK_fileserver', array('label' => 'File Server','options' => $fileservers)). "</div>";
            echo $this->Form->submit('Guardar Audio', array('class' => 'btn'));
            ?>
            <?php echo $this->Html->link('Cancelar', array('controller' => 'audio', 'action' => 'index'), array('class' => 'btn')); ?>
            
        </div>

    </div>

</div>