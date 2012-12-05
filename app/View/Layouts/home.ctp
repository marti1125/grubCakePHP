<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

//AuthComponent::user('id');
$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php echo $cakeDescription ?>:
            <?php echo $title_for_layout; ?>
        </title>
        <?php
        echo $this->Html->meta('icon');

        echo $this->Html->css('custom');
        echo $this->Html->css('plugin');
        echo $this->Html->css('screen');
        echo $this->Html->css('skin/blue.monday/jplayer.blue.monday');
        echo $this->Html->css('app');

        echo $this->Html->script('jquery.min');
        echo $this->Html->script('plugin');
        echo $this->Html->script('slate');
        echo $this->Html->script('slate.portlet');
        echo $this->Html->script('jquery.jplayer.min');
        echo $this->Html->script('app');        

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
    </head>
    <body>
        <div id="container">		
            <div id="content">
                <div id="wrapper" class="clearfix">

                    <div id="top">
                        <div id="header">


                            <div id="info">
                                <h4>Bienvenido Administrador</h4>

                                <p>
                                    Logged in as <?php echo AuthComponent::user('username'); ?>
                                   
                                    <?php echo $this->Html->link('logout', array('controller' => 'users', 'action' => 'logout')); ?>
                                </p>

                            </div> <!-- #info -->

                        </div> <!-- #header -->	


                        <div id="nav">	

                            <ul class="mega-container mega-grey">

                                <li class="mega mega-current">
                                    <?php echo $this->Html->link('Inicio', array('controller' => 'home', 'action' => 'index'), array('class' => 'mega-link')); ?>                           	
                                </li>

                                <li class="mega">				
                                    <a href="javascript:;" class="mega-tab">
                                        Gestion
                                    </a>

                                    <div class="mega-content mega-menu ">
                                        <ul>  
                                            <li><?php echo $this->Html->link('Usuarios', array('controller' => 'users', 'action' => 'index')); ?></li>
                                            <li><?php echo $this->Html->link('Grabaciones', array('controller' => 'record', 'action' => 'index')); ?></li>
                                            <li><?php echo $this->Html->link('Agentes', array('controller' => 'agent', 'action' => 'index')); ?></li>
                                            <li><?php echo $this->Html->link('File Server', array('controller' => 'fileserver', 'action' => 'index')); ?></li>
                                            <li><?php echo $this->Html->link('Audios', array('controller' => 'audio', 'action' => 'index')); ?></li>
                                            <li><?php echo $this->Html->link('CallCenters', array('controller' => 'callcenter', 'action' => 'index')); ?></li>                                            
                                            <li><?php echo $this->Html->link('Compañias', array('controller' => 'company', 'action' => 'index')); ?></li>
                                            <li><?php echo $this->Html->link('Areas de la Compañia', array('controller' => 'companyarea', 'action' => 'index')); ?></li>
                                            <li><?php echo $this->Html->link('Número de Extensión', array('controller' => 'extensionnumber', 'action' => 'index')); ?></li>
                                            <li><?php echo $this->Html->link('Speech', array('controller' => 'speech', 'action' => 'index')); ?></li>
                                            <li><?php echo $this->Html->link('Filtros', array('controller' => 'filterrule', 'action' => 'index')); ?></li>
                                            <li><?php echo $this->Html->link('Detalles de los Filtros', array('controller' => 'filterruledetail', 'action' => 'index')); ?></li>
                                            <li><?php echo $this->Html->link('Palabras Clave', array('controller' => 'word', 'action' => 'index')); ?></li>
                                            <li><?php echo $this->Html->link('Variante de Palabra Clave', array('controller' => 'wordvariant', 'action' => 'index')); ?></li>
                                            <li><?php echo $this->Html->link('Transcripción', array('controller' => 'transcription', 'action' => 'index')); ?></li>
                                            <li><?php echo $this->Html->link('Speech Datos', array('controller' => 'speechdata', 'action' => 'index')); ?></li>
                                            <li><?php echo $this->Html->link('Linea Guia', array('controller' => 'guideline', 'action' => 'index')); ?></li>
                                            <li><?php echo $this->Html->link('Linea Guia Categorias', array('controller' => 'guidelinecategory', 'action' => 'index')); ?></li>
                                            <li><?php echo $this->Html->link('Linea Guia Detalles', array('controller' => 'guidelinedetail', 'action' => 'index')); ?></li>
                                            <li><?php echo $this->Html->link('Servicios', array('controller' => 'service', 'action' => 'index')); ?></li>
                                        </ul>
                                    </div>						
                                </li> 
                                
                            </ul>
                        </div> <!-- #nav -->
                    </div> <!-- #top -->

                    <?php //echo $this->Session->flash(); ?>

                    <?php echo $this->fetch('content'); ?>
                </div>		
            </div>
            <?php //echo $this->element('sql_dump');  ?>
            <script type="text/javascript" charset="utf-8">
                $(function()
                {
                    slate.init();
                    slate.portlet.init();
                });
            </script>
    </body>
</html>
