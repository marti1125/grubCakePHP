<div id="content" class="xfluid">		
    <div class="portlet x12">
        <div class="portlet-header">
            <h4>Compañias</h4>
        </div>	
    <div class="portlet-content">
        <table cellpadding="0" cellspacing="0" border="0" class="display" rel="datatable" id="example">
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Compañia</th>
                        <th>Dirección</th>
                        <th>Ciudad</th>	
                        <th>Departamento</th>
                        <th>Codigo postal</th>
                        <th>Telefono</th>
                        <th>Pais</th>
                        <th>Logo</th>
                        <th>Web</th>
                    </tr>	
                </thead>
                <tbody>
                <?php foreach ($company as $data): ?>
                <tr class="gradeA">
                        <td><?php echo $data['Company']['PK_company']; ?></td>
                        <td><?php echo $data['Company']['company']; ?></td>
                        <td><?php echo $data['Company']['address']; ?></td>
                        <td><?php echo $data['Company']['city']; ?></td>
                        <td><?php echo $data['Company']['state']; ?></td>
                        <td><?php echo $data['Company']['zip']; ?></td>
                        <td><?php echo $data['Company']['phone']; ?></td>
                        <td><?php echo $data['Company']['country']; ?></td>
                        <td><?php echo $data['Company']['fileLogo']; ?></td>
                        <td><?php echo $data['Company']['url']; ?></td>
                </tr>
                <?php endforeach; ?>
                <?php unset($company); ?>
                </tbody>
        </table>
        </div>
    </div>
</div>