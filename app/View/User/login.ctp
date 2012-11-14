<h1>Ingreso al Sistema</h1>

<?php

echo $this->Form->create('User');
echo "<div class=pad><div class=input><span class=input>" . $this->Form->input('username', array('label' => 'USUARIO')) . "<span></div>";
echo "<br/>";
echo "<div class=input><span class=input>" . $this->Form->input('password', array('label' => 'CONTRASEÑA')) . "<span></div>";
//echo $this->Form->input('auto_login', array('type' => 'checkbox', 'label' => 'Log me in automatically?'));
echo "<br/>";
echo $this->Form->end('Ingresar') . "</div>";
?>
<?php //echo $this->Session->flash('auth'); ?>    


