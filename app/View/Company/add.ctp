<div id="content" class="xfluid">

    <div class="portlet x9">
        
        <div class="portlet-header"><h4>Agregar Compañia</h4></div>
        <?php echo $this->Session->flash(); ?>
        <div class="portlet-content">

            <?php
            echo $this->Form->create('Company', array('class' => 'formulario'));            
            echo "<div class=fieldadd>" . $this->Form->input('company', array('type' => 'text', 'label' => 'Compañia')) . "</div>"; 
            echo "<div class=fieldadd>" . $this->Form->input('address', array('type' => 'text', 'label' => 'Dirección')) . "</div>";
            echo "<div class=fieldadd>" . $this->Form->input('city', array('type' => 'text', 'label' => 'Cuidad')) . "</div>";
            echo "<div class=fieldadd>" . $this->Form->input('state', array('type' => 'text', 'label' => 'Provincia')) . "</div>";
            echo "<div class=fieldadd>" . $this->Form->input('zip', array('type' => 'text', 'label' => 'Codigo Zip')) . "</div>";
            echo "<div class=fieldadd>" . $this->Form->input('phone', array('type' => 'text', 'label' => 'Telefono')) . "</div>";
            echo "<div class=fieldadd>" . $this->Form->input('country', array('type' => 'text', 'label' => 'Pais')) . "</div>";
            echo "<div class=fieldadd>" . $this->Form->input('fileLogo', array('type' => 'text', 'label' => 'Logo')) . "</div>";
            echo "<div class=fieldadd>" . $this->Form->input('url', array('type' => 'text', 'label' => 'Sitio Web')) . "</div>";            
            echo $this->Form->submit('Guardar Compañia', array('class' => 'btn'));
            ?>
            <?php echo $this->Html->link('Cancelar', array('controller' => 'company', 'action' => 'index'), array('class' => 'btn')); ?>
            
        </div>

    </div>

</div>