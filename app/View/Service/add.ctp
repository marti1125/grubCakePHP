<div id="content" class="xfluid">

    <div class="portlet x9">
        
        <div class="portlet-header"><h4>Agregar Servicio</h4></div>
        <?php echo $this->Session->flash(); ?>
        <div class="portlet-content">

            <?php
            echo $this->Form->create('Service', array('class' => 'formulario'));            
            echo "<div class=fieldadd>" . $this->Form->input('service', array('type' => 'text', 'label' => 'Servicio')) . "</div>";
            echo "<div class=fieldadd>" . $this->Form->input('active', array('type' => 'text', 'label' => 'Activo')) . "</div>"; 
            echo "<div class=fieldadd>" . $this->Form->input('sysCode', array('type' => 'text', 'label' => 'Codigo del sistema')) . "</div>"; 
            echo $this->Form->submit('Guardar Servicio', array('class' => 'btn'));            
            ?>
            <?php echo $this->Html->link('Cancelar', array('controller' => 'service', 'action' => 'index'), array('class' => 'btn')); ?>

        </div>

    </div>

</div>