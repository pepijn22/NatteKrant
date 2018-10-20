
<div class="m-portlet__body">
	<!--begin: Datatable -->
	<div id="m_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
    
    <div class="row">
    	<div class="col-sm-12">
	      	<h5>Facturabele orders:</h5>
	        <table class="table table-striped- table-bordered table-hover table-checkable dataTable no-footer dtr-inline" id="m_table_1" role="grid" aria-describedby="m_table_1_info" style="width: 1028px;">
				<thead>
					<tr role="row">
	                  	<th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" aria-label="Factuur id: activate to sort Factuur id ascending">Factuur id</th>
	                  	<th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" aria-label="Factuur id: activate to sort Factuur id ascending">Order id</th>
	                    <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" aria-label="Company Agent: activate to sort column ascending">Order status</th>
	                    <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" aria-label="">Datum factuur</th>
	                    <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" aria-label="">Factuur status</th>
	                </tr>
				</thead>
				<tbody>
	                <?php
	                    $sql = "SELECT ko.order_id, f.factuur_id AS factuurnummer, f.datum AS factuurdatum, ko.status AS orderstatus, fs.status AS factuurstatus
FROM factuur AS f
	LEFT JOIN factuurstatus AS fs ON f.factuur_id = fs.factuur_id
	LEFT JOIN klantorder AS ko ON ko.order_id = fs.order_id
	LEFT JOIN klant AS k ON k.klant_id = ko.Klant_klant_id
	WHERE f.status = 'facturabel'";
	                    foreach ($conn->query($sql) as $row) {
	                        ?>
	                        <tr role="row" class="odd">
				  				<td class="" tabindex="0">
	                                <div class="m-card-user m-card-user--sm">
	                                    <div class="m-card-user__details">
	                                        <span class="m-card-user__name"><?=$row['factuurnummer']?></span>
	                                    </div>
	                                </div>
	                            </td>
	                            <td class=""><?=$row['order_id']?></td>
								<td class=""><?=$row['orderstatus']?></td>
								<td class=""><?=$row['factuurdatum']?></td>
								<td class=""><?=$row['factuurstatus']?></td>
	        				  	</tr>
	                        <?php
	                    }

	                ?>
	                  </tbody>
				</table>
		</div>
      	<div class="col-sm-12">
	      	<h5>Wanbetalers:</h5>
	        <table class="table table-striped- table-bordered table-hover table-checkable dataTable no-footer dtr-inline" id="m_table_1" role="grid" aria-describedby="m_table_1_info" style="width: 1028px;">
				<thead>
					<tr role="row">
	                  	<th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" aria-label="Factuur id: activate to sort Factuur id ascending">Factuur id</th>
	                    <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" aria-label="">Klant</th>
	                    <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" aria-label="">Order status</th>
	                    <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" aria-label="Company Agent: activate to sort column ascending">Telefoon</th>
	                    <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" aria-label="Company Name: activate to sort column ascending">Datum verstuurd</th>
	                    <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" aria-label="Company Name: activate to sort column ascending">Factuur tatus</th>
	                </tr>
				</thead>
				<tbody>
	                <?php
	                    $sql = "SELECT k.naam AS klantnaam,
							    k.telefoonnummer AS telefoonnummer,
							    f.factuur_id AS factuurnummer,
							    f.datum AS factuurdatum,
							    fs.status AS factuurstatus,
                                ko.status AS orderstatus
							FROM
							    factuur AS f
							        LEFT JOIN
							    factuurstatus AS fs ON f.factuur_id = fs.factuur_id
							        LEFT JOIN
							    klantorder AS ko ON ko.order_id = fs.order_id
							        LEFT JOIN
							    klant AS k ON k.klant_id = ko.Klant_klant_id
							WHERE
							    fs.status = 'Verstuurd'
							        AND DATEDIFF(NOW(), f.datum) > 14
							";
	                    foreach ($conn->query($sql) as $row) {
	                        ?>
	                        <tr role="row" class="odd">
				  				<td class="" tabindex="0">
	                                <div class="m-card-user m-card-user--sm">
	                                    <div class="m-card-user__details">
	                                        <span class="m-card-user__name"><?=$row['factuurnummer']?></span>
	                                    </div>
	                                </div>
	                            </td>
								<td class=""><?=$row['klantnaam']?></td>
								<td class=""><?=$row['orderstatus']?></td>
								<td class=""><?=$row['telefoonnummer']?></td>
								<td class=""><?=$row['factuurdatum']?></td>
								<td class=""><?=$row['factuurstatus']?></td>
	        				  	</tr>
	                        <?php
	                    }

	                ?>
	                  </tbody>
				</table>
		</div>
	</div>
</div>
</div>
