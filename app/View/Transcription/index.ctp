<div id="content" class="xfluid">		
    <div class="portlet x12">
    <div class="portlet-header"><h4>Transcripciones</h4></div>
    <br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->Html->link('Agregar Transcripción', array('controller' => 'transcription', 'action' => 'add'), array('class' => 'btn')); ?>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->Session->flash(); ?>
			
    <div class="portlet-content">

        <table cellpadding="0" cellspacing="0" border="0" class="display" rel="datatable" id="example">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Audio</th>
                    <th>Segundo Inicial</th>
                    <th>Segundo Final</th>
                    <th>Transcripción</th>
                    <th>Transcripción Orden</th>
                    <th>Acciones</th>
                </tr>	
            </thead>
            <tbody>
            <?php foreach ($transcriptions as $data): ?>
            <tr class="gradeA">
                    <td><?php echo $data['Transcription']['PK_transcription']; ?></td>
                    <td><?php echo $data['Audio']['fileName']; ?></td>
                    <td><?php echo $data['Transcription']['secondInit']; ?></td>
                    <td><?php echo $data['Transcription']['secondLast']; ?></td>
                    <td><?php echo $data['Transcription']['textTranscription']; ?></td>
                    <td><?php echo $data['Transcription']['textOrder']; ?></td>
                    <td><?php echo $this->Html->image('update.png', array('url' => array('controller' => 'transcription', 'action' => 'edit', $data['Transcription']['PK_transcription']))); 
                                                  echo "&nbsp;&nbsp;&nbsp;".$this->Form->postLink($this->Html->image('delete.png', array('alt' => 'delete')), 
                                                                  array('action' => 'delete', $data['Transcription']['PK_transcription']), 
                                                                  array('confirm' => '¿Esta seguro?', 'escape' => false)); ?></td>                                    
            </tr>
            <?php endforeach; ?>
            <?php unset($transcriptions); ?>
            </tbody>
        </table>
    </div>
</div>
</div>