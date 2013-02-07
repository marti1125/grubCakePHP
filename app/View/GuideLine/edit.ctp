<div id="content" class="xfluid">

    <div class="portlet x9">
        
        <div class="portlet-header"><h4>Agregar Linea Guia</h4></div>
        <?php echo $this->Session->flash(); ?>
        <div class="portlet-content">

            <?php
            echo $this->Form->create('GuideLine', array('class' => 'formulario'), array('action' => 'edit'));            
            echo "<div class=fieldadd>" . $this->Form->input('guideline', array('type' => 'text', 'label' => 'Linea Guia')) . "</div>";
            echo "<div class=fieldadd>" . $this->Form->input('sourcetext', array('type' => 'textarea', 'label' => 'Origen')) . "</div>"; 
            echo $this->Form->submit('Guardar Agregar Linea Guia', array('class' => 'btn'));            
            ?>
            <?php echo $this->Html->link('Cancelar', array('controller' => 'guideline', 'action' => 'index'), array('class' => 'btn')); ?>

        </div>

    </div>

</div>