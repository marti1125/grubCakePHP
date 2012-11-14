<div id="content" class="xfluid">		
    <div class="portlet x12">
    <div class="portlet-header"><h4>Agentes</h4></div>
			
    <div class="portlet-content">

        <table cellpadding="0" cellspacing="0" border="0" class="display" rel="datatable" id="example">
            <thead>
                <tr>
                    <th>Compañia</th>
                    <th>Agente</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>	
                    <th>Fecha de Creación</th>
                    <th>Estado</th>
                    <th>Ultimo ingreso</th>
                    <th>Contraseña</th>
                    <th>Imagen</th>
                    <th>Posición</th>
                </tr>	
            </thead>
            <tbody>
            <?php foreach ($agents as $agent): ?>
            <tr class="gradeA">
                    <td><?php echo $agent['Agent']['PK_agent']; ?></td>
                    <td><?php echo $agent['Agent']['agentId']; ?></td>
                    <td><?php echo $agent['Agent']['firstName']; ?></td>
                    <td><?php echo $agent['Agent']['lastName']; ?></td>
                    <td><?php echo $agent['Agent']['dateCreated']; ?></td>
                    <td><?php echo $agent['Agent']['disabled']; ?></td>
                    <td><?php echo $agent['Agent']['lastlogin']; ?></td>
                    <td><?php echo $agent['Agent']['password']; ?></td>
                    <td><?php echo $agent['Agent']['fileImage']; ?></td>
                    <td><?php echo $agent['Agent']['position']; ?></td>
            </tr>
            <?php endforeach; ?>
            <?php unset($agents); ?>
            </tbody>
        </table>
    </div>
</div>
</div>