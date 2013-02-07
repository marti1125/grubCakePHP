<div id="content" class="xfluid">

    <div class="portlet x9">
        
        <div class="portlet-header"><h4>Agregar Detalle</h4></div>
        <?php echo $this->Session->flash(); ?>
        <div class="portlet-content">

            <?php
            echo $this->Form->create('FilterRuleDetail', array('class' => 'formulario')); 
            echo "<div class=fieldadd>" . $this->Form->input('FK_filterRule', array('label' => 'Filtros','options' => $filterules)). "</div>";

            echo "<div class=fieldadd>" . $this->Form->input('filterWord', array('type' => 'text', 'label' => 'Palabra Filtrada')) . "</div>";
            echo "<div class=fieldadd>" . $this->Form->input('filterOrder', array('type' => 'text','label' => 'Orden')) . "</div>"; 
            echo "<div class=fieldadd>" . $this->Form->input('maxProximity', array('type' => 'text','label' => 'Prioridad')) . "</div>";               
            
            echo "<div class=fieldadd>" . $this->Form->input('FK_word', array('label' => 'Palabras','options' => $words)). "</div>";
            echo $this->Form->submit('Guardar Detalle', array('class' => 'btn'));
            ?>
            <?php echo $this->Html->link('Cancelar', array('controller' => 'filterruledetail', 'action' => 'index'), array('class' => 'btn')); ?>
            
        </div>

    </div>

</div>