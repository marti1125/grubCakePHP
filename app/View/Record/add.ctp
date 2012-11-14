<div id="content" class="xfluid">

    <div class="portlet x9">
        
        <div class="portlet-header"><h4>Agregar  Grabación</h4></div>

        <div class="portlet-content">

            <?php
            echo $this->Form->create('Record', array('class' => 'formulario')); 
            echo $this->Form->input('PK_record', array('type' => 'hidden'));
            echo "<div class=fieldadd>" . $this->Form->input('numCallerid', array('label' => 'Numero')) . "</div>";
            echo "<div class=fieldadd>" . $this->Form->input('fileSource', array('label' => 'Archivo')) . "</div>";
            echo "<div class=fieldadd>" . $this->Form->input('dirSource', array('label' => 'Directorio')) . "</div>";
            echo "<div class=fieldadd>" . $this->Form->input('indexed', array('label' => 'Indice')) . "</div>";
            echo "<div class=fieldadd>" . $this->Form->input('dateFileSource', array('label' => 'Fuente'),array('class' => 'medium')) . "</div>";
            echo "<div class=fieldadd>" . $this->Form->input('FK_fileserver', array('label' => 'Servidor')) . "</div>";
            echo $this->Form->submit('Guardar grabación', array('class' => 'btn'));
            ?>

        </div>

    </div>

</div>