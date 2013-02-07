<div id="content" class="xfluid">

    <div class="portlet x9">
        
        <div class="portlet-header"><h4>Agregar Speech</h4></div>
        <?php echo $this->Session->flash(); ?>
        <div class="portlet-content">

            <?php
            echo $this->Form->create('Speech', array('class' => 'formulario'));            
            echo "<div class=fieldadd>" . $this->Form->input('speech', array('type' => 'text', 'label' => 'Speech')) . "</div>";               
            echo $this->Form->submit('Guardar Speech', array('class' => 'btn'));            
            ?>
            <?php echo $this->Html->link('Cancelar', array('controller' => 'speech', 'action' => 'index'), array('class' => 'btn')); ?>

        </div>

    </div>

</div>