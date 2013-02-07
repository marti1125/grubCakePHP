<div id="content" class="xfluid">		
    <div class="portlet x12">
    <div class="portlet-header"><h4>Linea Guia Categorias</h4></div>
    <br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->Html->link('Agregar Categoria', array('controller' => 'guidelinecategory', 'action' => 'add'), array('class' => 'btn')); ?>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php //echo $this->Session->flash(); ?>
			
    <div class="portlet-content">

        <table cellpadding="0" cellspacing="0" border="0" class="display" rel="datatable" id="example">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Categoria</th>
                    <th>Linea Guia</th>
                    <th>Acciones</th>
                </tr>	
            </thead>
            <tbody>
            <?php foreach ($glcategories as $data): ?>
            <tr class="gradeA">
                    <td><?php echo $data['GuideLineCategory']['PK_guidelineCategory']; ?></td>                    
                    <td><?php echo $data['GuideLineCategory']['categoryName']; ?></td> 
                    <td><?php echo $data['GuideLine']['guideline']; ?></td>
                    <td><?php echo $this->Html->image('update.png', array('url' => array('controller' => 'guidelinecategory', 'action' => 'edit', $data['GuideLineCategory']['PK_guidelineCategory']))); 
                                                  echo "&nbsp;&nbsp;&nbsp;".$this->Form->postLink($this->Html->image('delete.png', array('alt' => 'delete')), 
                                                                  array('action' => 'delete', $data['GuideLineCategory']['PK_guidelineCategory']), 
                                                                  array('confirm' => '¿Esta seguro?', 'escape' => false)); ?></td>                                    
            </tr>
            <?php endforeach; ?>
            <?php unset($glcategories); ?>
            </tbody>
        </table>
    </div>
</div>
</div>