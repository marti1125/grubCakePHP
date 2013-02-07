<div id="content" class="xfluid">		
    <div class="portlet x12">
    <div class="portlet-header"><h4>Speech Datos</h4></div>
    <br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->Html->link('Agregar Speech Datos', array('controller' => 'speechdata', 'action' => 'add'), array('class' => 'btn')); ?>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php //echo $this->Session->flash(); ?>
			
    <div class="portlet-content">

        <table >
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Speech</th>
                    <th>Palabra Original</th>
                    <th>Palabra Inicial</th>	
                    <th>Palabra</th>                    
                    <th>Acciones</th>
                </tr>	
            </thead>
            <tbody>
            <?php foreach ($speechdatas as $data): ?>
            <tr class="gradeA">
                    <td><?php echo $data['SpeechData']['PK_speechData']; ?></td>
                    <td><?php echo $data['Speech']['speech']; ?></td>
                    <td><?php echo $data['SpeechData']['wordOriginal']; ?></td>
                    <td><?php echo $data['SpeechData']['wordClean']; ?></td>
                    <td><?php echo $data['Word']['Word']; ?></td>                    
                    <td><?php 
                    echo $this->Html->image('update.png', array('url' => array('controller' => 'speechdata', 'action' => 'edit', $data['SpeechData']['PK_speechData'])));
                    ?>
                    <?php
                    echo "&nbsp;&nbsp;&nbsp;".$this->Form->postLink($this->Html->image('delete.png', array('alt' => 'delete')), 
                                 array('action' => 'delete', $data['SpeechData']['PK_speechData']), 
                                 array('confirm' => '¿Esta seguro?', 'escape' => false));                              
                    ?></td>
            </tr>
            <?php endforeach; ?>
            <?php unset($speechdatas); ?>
            </tbody>
        </table>
        <?php // echo $this->Paginator->numbers(array('first' => 'First page'));?> 
    </div>
</div>
</div>