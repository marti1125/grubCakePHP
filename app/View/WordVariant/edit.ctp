<div id="content" class="xfluid">

    <div class="portlet x9">
        
        <div class="portlet-header"><h4>Actualizar Variante</h4></div>
        <?php echo $this->Session->flash(); ?>
        <div class="portlet-content">

            <?php
            echo $this->Form->create('WordVariant', array('class' => 'formulario'), array('action' => 'edit'));   
            echo "<div class=fieldadd>" . $this->Form->input('FK_word', array('label' => 'Palabra','options' => $wordvariants)). "</div>";
            echo "<div class=fieldadd>" . $this->Form->input('wordVariant', array('type' => 'text', 'label' => 'Variante')) . "</div>";               
            echo $this->Form->submit('Actualizar Variante', array('class' => 'btn'));            
            ?>
            <?php echo $this->Html->link('Cancelar', array('controller' => 'wordvariant', 'action' => 'index'), array('class' => 'btn')); ?>

        </div>

    </div>

</div>