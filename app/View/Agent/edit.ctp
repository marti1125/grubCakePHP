<div id="content" class="xfluid">

    <div class="portlet x9">
        
        <div class="portlet-header"><h4>Acualizar  Grabación</h4></div>

        <div class="portlet-content">

            <?php
            echo $this->Form->create('Agent', array('class' => 'formulario'), array('action' => 'edit'));
            echo "<div class=fieldadd>" . $this->Form->input('agentId', array('label' => 'Usuario')) . "</div>";
            echo "<div class=fieldadd>" . $this->Form->input('password', array('label' => 'Contraseña')) . "</div>";  
            echo "<div class=fieldadd>" . $this->Form->input('firstName', array('type' => 'text','label' => 'Nombre')) . "</div>"; 
            echo "<div class=fieldadd>" . $this->Form->input('lastName', array('type' => 'text','label' => 'Apellidos')) . "</div>";            
            echo "<div class=fieldadd>" . $this->Form->input('fileImage', array('type' => 'text','label' => 'Imagen')) . "</div>";
            echo "<div class=fieldadd>" . $this->Form->input('position', array('type' => 'text','label' => 'Posición')) . "</div>";     
            echo $this->Form->submit('Actualizar Agente', array('class' => 'btn'));
            ?>
            <?php echo $this->Html->link('Cancelar', array('controller' => 'agent', 'action' => 'index'), array('class' => 'btn')); ?>

        </div>

    </div>

</div>