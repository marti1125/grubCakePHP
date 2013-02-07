<div id="content" class="xfluid">

    <div class="portlet x9">
        
        <div class="portlet-header"><h4>Agregar Palabra Clave</h4></div>
        <?php echo $this->Session->flash(); ?>
        <div class="portlet-content">

            <?php
            echo $this->Form->create('Word', array('class' => 'formulario'));            
            echo "<div class=fieldadd>" . $this->Form->input('Word', array('type' => 'text', 'label' => 'Palabra')) . "</div>";               
            echo $this->Form->submit('Guardar Palabra Clave', array('class' => 'btn'));            
            ?>
            <?php echo $this->Html->link('Cancelar', array('controller' => 'word', 'action' => 'index'), array('class' => 'btn')); ?>

        </div>

    </div>

</div>