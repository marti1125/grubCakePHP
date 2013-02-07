<div id="content" class="xfluid">

    <div class="portlet x9">
        
        <div class="portlet-header"><h4>Agregar Area</h4></div>
        <?php echo $this->Session->flash(); ?>
        <div class="portlet-content">

            <?php
            echo $this->Form->create('CompanyArea', array('class' => 'formulario'));            
            echo "<div class=fieldadd>" . $this->Form->input('area', array('type' => 'text', 'label' => 'Area')) . "</div>";            
            echo "<div class=fieldadd>" . $this->Form->input('FK_company', array('label' => 'Compañias','options' => $companies)). "</div>";
            echo $this->Form->submit('Guardar Area', array('class' => 'btn'));
            ?>
            <?php echo $this->Html->link('Cancelar', array('controller' => 'companyarea', 'action' => 'index'), array('class' => 'btn')); ?>
            
        </div>

    </div>

</div>