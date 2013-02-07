<div id="content" class="xfluid">

    <div class="portlet x9">
        
        <div class="portlet-header"><h4>Agregar Detalle</h4></div>
        <?php echo $this->Session->flash(); ?>
        <div class="portlet-content">

            <?php
            echo $this->Form->create('GuideLineDetail', array('class' => 'formulario'));            
            echo "<div class=fieldadd>" . $this->Form->input('wordInit', array('type' => 'text', 'label' => 'Palabra Inicial')) . "</div>";
            echo "<div class=fieldadd>" . $this->Form->input('wordLast', array('type' => 'text','label' => 'Ultima Palabra')) . "</div>";      
            echo "<div class=fieldadd>" . $this->Form->input('FK_speech', array('label' => 'Speech','options' => $speechs)). "</div>";
            echo "<div class=fieldadd>" . $this->Form->input('FK_guidelineCategory', array('label' => 'Categoria','options' => $glcategories)). "</div>";
            echo "<div class=fieldadd>" . $this->Form->input('importance', array('type' => 'text','label' => 'Importancia')) . "</div>"; 
            echo $this->Form->submit('Guardar Detalle', array('class' => 'btn'));
            ?>
            <?php echo $this->Html->link('Cancelar', array('controller' => 'guidelinedetail', 'action' => 'index'), array('class' => 'btn')); ?>
            
        </div>

    </div>

</div>