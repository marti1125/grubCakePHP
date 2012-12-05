<div id="content" class="xfluid">		
    <div class="portlet x12">
    <div class="portlet-header"><h4>Linea Guia Detalle</h4></div>
    <br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->Html->link('Agregar Detalle', array('controller' => 'guidelinedetail', 'action' => 'add'), array('class' => 'btn')); ?>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php //echo $this->Session->flash(); ?>
			
    <div class="portlet-content">

        <table >
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Palabra Inicial</th>
                    <th>Ultima Palabra</th>
                    <th>Speech</th>	
                    <th>Categoria</th>
                    <th>Importancia</th>                    
                    <th>Acciones</th>
                </tr>	
            </thead>
            <tbody>
            <?php foreach ($guidelinedetails as $data): ?>
            <tr class="gradeA">
                    <td><?php echo $data['GuideLineDetail']['PK_guidelineDetail']; ?></td>
                    <td><?php echo $data['GuideLineDetail']['wordInit']; ?></td>
                    <td><?php echo $data['GuideLineDetail']['wordLast']; ?></td>
                    <td><?php echo $data['Speech']['speech']; ?></td>
                    <td><?php echo $data['GuideLineCategory']['categoryName']; ?></td>
                    <td><?php echo $data['GuideLineDetail']['importance']; ?></td>                    
                    <td><?php 
                    echo $this->Html->image('update.png', array('url' => array('controller' => 'guidelinedetail', 'action' => 'edit', $data['GuideLineDetail']['PK_guidelineDetail'])));
                    ?>
                    <?php
                    echo "&nbsp;&nbsp;&nbsp;".$this->Form->postLink($this->Html->image('delete.png', array('alt' => 'delete')), 
                                  array('action' => 'delete', $data['GuideLineDetail']['PK_guidelineDetail']), 
                                  array('confirm' => '¿Esta seguro?', 'escape' => false));                              
                    ?></td>
            </tr>
            <?php endforeach; ?>
            <?php unset($guidelinedetails); ?>
            </tbody>
        </table>
        <?php //echo $this->Paginator->numbers(array('first' => 'First page'));?> 
    </div>
</div>
</div>