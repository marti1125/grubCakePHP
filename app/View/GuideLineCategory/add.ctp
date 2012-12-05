<div id="content" class="xfluid">

    <div class="portlet x9">
        
        <div class="portlet-header"><h4>Agregar Categoria</h4></div>
        <?php echo $this->Session->flash(); ?>
        <div class="portlet-content">

            <?php
            echo $this->Form->create('GuideLineCategory', array('class' => 'formulario'));            
            echo "<div class=fieldadd>" . $this->Form->input('categoryName', array('type' => 'text', 'label' => 'Categoria')) . "</div>";
            echo "<div class=fieldadd>" . $this->Form->input('FK_guideline', array('label' => 'Linea Guia','options' => $glcategories)). "</div>";
            echo $this->Form->submit('Guardar Categoria', array('class' => 'btn'));            
            ?>
            <?php echo $this->Html->link('Cancelar', array('controller' => 'guidelinecategory', 'action' => 'index'), array('class' => 'btn')); ?>

        </div>

    </div>

</div>