<div id="content" class="xfluid">

    <div class="portlet x9">
        
        <div class="portlet-header"><h4>Agregar Speech Datos</h4></div>
        <?php echo $this->Session->flash(); ?>
        <div class="portlet-content">

            <?php
            echo $this->Form->create('SpeechData', array('class' => 'formulario'));   
            echo "<div class=fieldadd>" . $this->Form->input('FK_speech', array('label' => 'Palabra','options' => $speechs)). "</div>";
            echo "<div class=fieldadd>" . $this->Form->input('wordOriginal', array('type' => 'text', 'label' => 'Palabra Original')) . "</div>";
            echo "<div class=fieldadd>" . $this->Form->input('wordClean', array('type' => 'text', 'label' => 'Palabra Inicial')) . "</div>";
            echo "<div class=fieldadd>" . $this->Form->input('FK_word', array('label' => 'Palabra','options' => $words)). "</div>";
            echo $this->Form->submit('Guardar Speech Datos', array('class' => 'btn'));            
            ?>
            <?php echo $this->Html->link('Cancelar', array('controller' => 'speechdata', 'action' => 'index'), array('class' => 'btn')); ?>

        </div>

    </div>

</div>