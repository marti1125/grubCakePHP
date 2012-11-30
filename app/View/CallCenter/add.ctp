<div id="content" class="xfluid">

    <div class="portlet x9">
        
        <div class="portlet-header"><h4>Agregar CallCenter</h4></div>
        <?php echo $this->Session->flash(); ?>
        <div class="portlet-content">

            <?php
            echo $this->Form->create('CallCenter', array('class' => 'formulario'));            
            echo "<div class=fieldadd>" . $this->Form->input('callcenter', array('type' => 'text', 'label' => 'CallCenter')) . "</div>";            
            echo "<div class=fieldadd>" . $this->Form->input('FK_company', array('label' => 'Compañia','options' => $companys)). "</div>";
            echo $this->Form->submit('Guardar CallCenter', array('class' => 'btn'));
            ?>
            <?php echo $this->Html->link('Cancelar', array('controller' => 'callcenter', 'action' => 'index'), array('class' => 'btn')); ?>
            
        </div>

    </div>

</div>