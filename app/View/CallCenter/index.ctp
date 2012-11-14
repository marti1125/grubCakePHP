<div id="content" class="xfluid">		
    <div class="portlet x12">
    <div class="portlet-header"><h4>CallCenters</h4></div>
			
    <div class="portlet-content">

        <table cellpadding="0" cellspacing="0" border="0" class="display" rel="datatable" id="example">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>CallCenter</th>
                    <th>Compañia</th>                    
                </tr>	
            </thead>
            <tbody>
            <?php foreach ($callcenters as $callcenter): ?>
            <tr class="gradeA">
                    <td><?php echo $callcenter['CallCenter']['PK_callcenter']; ?></td>
                    <td><?php echo $callcenter['CallCenter']['callcenter']; ?></td>
                    <td><?php echo $callcenter['CallCenter']['FK_company']; ?></td>                    
            </tr>
            <?php endforeach; ?>
            <?php unset($callcenters); ?>
            </tbody>
        </table>
    </div>
</div>
</div>