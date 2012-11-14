<div id="content" class="xfluid">		
    <div class="portlet x12">
    <div class="portlet-header"><h4>Speech</h4></div>
			
    <div class="portlet-content">

        <table cellpadding="0" cellspacing="0" border="0" class="display" rel="datatable" id="example">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Speech</th>                                        
                </tr>	
            </thead>
            <tbody>
            <?php foreach ($speeches as $speech): ?>
            <tr class="gradeA">
                    <td><?php echo $speech['Speech']['PK_speech']; ?></td>
                    <td><?php echo $speech['Speech']['speech']; ?></td>                                     
            </tr>
            <?php endforeach; ?>
            <?php unset($speeches); ?>
            </tbody>
        </table>
    </div>
</div>
</div>