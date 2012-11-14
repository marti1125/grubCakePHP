<div id="content" class="xfluid">		
    <div class="portlet x12">
    <div class="portlet-header"><h4>Audios</h4></div>
			
    <div class="portlet-content">

        <table cellpadding="0" cellspacing="0" border="0" class="display" rel="datatable" id="example">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Archivo</th>
                    <th>Ubicación</th>
                    <th>Segundo</th>	
                    <th>Estado</th>
                    <th>Imagen</th>
                    <th>Grabación</th>
                    <th>Servidor</th>                    
                </tr>	
            </thead>
            <tbody>
            <?php foreach ($audio as $data): ?>
            <tr class="gradeA">
                    <td><?php echo $data['Audio']['PK_audio']; ?></td>
                    <td><?php echo $data['Audio']['fileName']; ?></td>
                    <td><?php echo $data['Audio']['dirName']; ?></td>
                    <td><?php echo $data['Audio']['seconds']; ?></td>
                    <td><?php echo $data['Audio']['status']; ?></td>
                    <td><?php echo $data['Audio']['thumbnail']; ?></td>
                    <td><?php echo $data['Audio']['FK_record']; ?></td>
                    <td><?php echo $data['Audio']['FK_fileserver']; ?></td>                    
            </tr>
            <?php endforeach; ?>
            <?php unset($audio); ?>
            </tbody>
        </table>
    </div>
</div>
</div>