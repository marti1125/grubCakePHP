<div id="content" class="xfluid">

    <div class="portlet x9">
        
        <div class="portlet-header"><h4>Agregar Transcripción</h4></div>
        <?php echo $this->Session->flash(); ?>
        <div class="portlet-content">

            <?php
            echo $this->Form->create('Transcription', array('class' => 'formulario'));   
            echo "<div class=fieldadd>" . $this->Form->input('FK_audio', array('label' => 'Audio','options' => $transcriptions)). "</div>";
            echo "<div class=fieldadd>" . $this->Form->input('secondInit', array('type' => 'text', 'label' => 'Segundo Inicial')) . "</div>";
            echo "<div class=fieldadd>" . $this->Form->input('secondLast', array('type' => 'text', 'label' => 'Ultimo Segundo')) . "</div>";
            echo "<div class=fieldadd>" . $this->Form->input('textTranscription', array('type' => 'text', 'label' => 'Transcripción')) . "</div>";
            echo "<div class=fieldadd>" . $this->Form->input('textOrder', array('type' => 'text', 'label' => 'Orden')) . "</div>";
            echo $this->Form->submit('Guardar Transcripción', array('class' => 'btn'));            
            ?>
            <?php echo $this->Html->link('Cancelar', array('controller' => 'transcription', 'action' => 'index'), array('class' => 'btn')); ?>

        </div>

    </div>

</div>