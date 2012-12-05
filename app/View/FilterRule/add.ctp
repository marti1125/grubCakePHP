<div id="content" class="xfluid">

    <div class="portlet x9">
        
        <div class="portlet-header"><h4>Agregar Filtro</h4></div>
        <?php echo $this->Session->flash(); ?>
        <div class="portlet-content">

            <?php
            echo $this->Form->create('FilterRule', array('class' => 'formulario'));
            echo "<div class=fieldadd>" . $this->Form->input('filterRule', array('type' => 'text', 'label' => 'Filtro')) . "</div>"; 
            echo "<div class=fieldadd>" . $this->Form->input('FK_speech', array('label' => 'Speech','options' => $speechs)). "</div>";
            echo $this->Form->submit('Guardar Filtro', array('class' => 'btn'));            
            ?>
            <?php echo $this->Html->link('Cancelar', array('controller' => 'filterrule', 'action' => 'index'), array('class' => 'btn')); ?>

        </div>

    </div>

</div>