<div id="content" class="xfluid">		
    <div class="portlet x12">
    <div class="portlet-header"><h4>CallCenters</h4></div>
    <br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->Html->link('Agregar CallCenter', array('controller' => 'callcenter', 'action' => 'add'), array('class' => 'btn')); ?>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->Session->flash(); ?>
    <div class="portlet-content">

        <table cellpadding="0" cellspacing="0" border="0" class="display" rel="datatable" id="example">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>CallCenter</th>
                    <th>Compañia</th>
                    <th>Acciones</th>
                </tr>	
            </thead>
            <tbody>
            <?php foreach ($callcenters as $callcenter): ?>
            <tr class="gradeA">
                    <td><?php echo $callcenter['CallCenter']['PK_callcenter']; ?></td>
                    <td><?php echo $callcenter['CallCenter']['callcenter']; ?></td>
                    <td><?php echo $callcenter['Company']['company']; ?></td>
                    <td><?php 
                    echo $this->Html->image('update.png', array('url' => array('controller' => 'callcenter', 'action' => 'edit', $callcenter['CallCenter']['PK_callcenter'])));
                    ?>
                    <?php
                    echo "&nbsp;&nbsp;&nbsp;".$this->Form->postLink($this->Html->image('delete.png', array('alt' => 'delete')), 
                                  array('action' => 'delete', $callcenter['CallCenter']['PK_callcenter']), 
                                  array('confirm' => '¿Esta seguro?', 'escape' => false));                              
                    ?></td>
            </tr>
            <?php endforeach; ?>
            <?php unset($callcenters); ?>
            </tbody>
        </table>
    </div>
</div>
</div>