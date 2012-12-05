<div id="content" class="xfluid">

    <div class="portlet x9">
        
        <div class="portlet-header"><h4>Agregar Extesión</h4></div>
        <?php echo $this->Session->flash(); ?>
        <div class="portlet-content">

            <?php
            echo $this->Form->create('ExtensionNumber', array('class' => 'formulario'));            
            echo "<div class=fieldadd>" . $this->Form->input('extensionNumber', array('type' => 'text', 'label' => 'Extesión')) . "</div>";               
            echo "<div class=fieldadd>" . $this->Form->input('FK_callcenter', array('label' => 'CallCenter','options' => $callcenters)). "</div>";
            echo "<div class=fieldadd>" . $this->Form->input('FK_agent', array('label' => 'Agente','options' => $agents)). "</div>";
            echo "<div class=fieldadd>" . $this->Form->input('FK_companyArea', array('label' => 'Area','options' => $comareas)). "</div>";
            echo $this->Form->submit('Guardar Extesión', array('class' => 'btn'));
            ?>
            <?php echo $this->Html->link('Cancelar', array('controller' => 'extensionnumber', 'action' => 'index'), array('class' => 'btn')); ?>
            
        </div>

    </div>

</div>