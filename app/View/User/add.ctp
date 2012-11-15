<div id="content" class="xfluid">

    <div class="portlet x9">
        
        <div class="portlet-header"><h4>Agregar Usuario</h4></div>
        <?php echo $this->Session->flash(); ?>
        <div class="portlet-content">

            <?php
            echo $this->Form->create('User', array('class' => 'formulario'));           
            echo "<div class=fieldadd>" . $this->Form->input('username', array('label' => 'Usuario')) . "</div>";
            echo "<div class=fieldadd>" . $this->Form->input('password', array('label' => 'Contraseña') ) . "</div>"; 
            echo "<div class=fieldadd>" . $this->Form->input('role', array(
			'options' => array('admin' => 'admin', 'author' => 'regular')
		)) . "</div>";            
            echo $this->Form->submit('Agregar Usuario', array('class' => 'btn'));
            ?>

        </div>

    </div>

</div>