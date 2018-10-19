<h2>Top 5 producten met de meeste winst</h2><br/>


<div class="m-portlet__body">
		<!--begin: Datatable -->
		<div id="m_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
      

    <div class="row">
      <div class="col-sm-12">
        <table class="table table-striped- table-bordered table-hover table-checkable dataTable no-footer dtr-inline" id="m_table_1" role="grid" aria-describedby="m_table_1_info" style="width: 1028px;">
						<thead>
			  						<tr role="row">
                      <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" aria-label="Naam: activate to sort naam ascending">Naam</th>
                      <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" aria-label="">Inkoopprijs</th>
                      <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" aria-label="Company Agent: activate to sort column ascending">Verkoopprijs</th>
                      <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" aria-label="Company Name: activate to sort column ascending">Winst</th>
                     
                    </tr>
						</thead>
								<tbody>
                <?php

                    $sql = 'SELECT
								p.naam,
								inkoopprijs,
								verkoopprijs,
								SUM(verkoopprijs - inkoopprijs) AS verschil
								FROM
								Inkoop i
								JOIN
								Product p ON i.Product_product_id = p.product_id
								GROUP BY inkoopprijs
								ORDER BY verschil DESC LIMIT 5';
								$counter = 0;
                    foreach ($conn->query($sql) as $row) {
                    	$counter++;

                        ?>
                        <tr role="row" class="odd">
        				  				<td class="" tabindex="0">
                                    <div class="m-card-user m-card-user--sm">
                                        <div class="m-card-user__pic">
                                            <div class="m-card-user__no-photo m--bg-fill-primary"><span><?= $counter; ?></span></div>
                                        </div>
                                        <div class="m-card-user__details">
                                            <span class="m-card-user__name"><?=$row['naam']?></span>
                                        </div>
                                    </div>
                            </td>
        				  									<td class=""><?=$row['inkoopprijs']?></td>
        				  									<td class=""><?=$row['verkoopprijs']?></td>
        				  								  <td class=""><?=$row['verschil']?></td>

        				  									
        				  					</tr>
                        <?php
                    }


                ?>


                  </tbody>

					</table>


				</div></div>


		</div>



	</div>
<br/><Br/>
<h2>Top 5 meest verkochte producten</h2><br/>


<div class="m-portlet__body">
		<!--begin: Datatable -->
		<div id="m_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
      

    <div class="row">
      <div class="col-sm-12">
        <table class="table table-striped- table-bordered table-hover table-checkable dataTable no-footer dtr-inline" id="m_table_1" role="grid" aria-describedby="m_table_1_info" style="width: 1028px;">
						<thead>
			  						<tr role="row">
                      <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" aria-label="Naam: activate to sort naam ascending">Naam</th>
                      <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" aria-label="">Korte beschrijving</th>
                      <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" aria-label="Company Agent: activate to sort column ascending">Aantal</th>
                      <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" aria-label="Company Name: activate to sort column ascending">Verkoopprijs</th>
                     
                    </tr>
						</thead>
								<tbody>
                <?php

                    $sql = 'SELECT naam, korte_beschrijving, aantal, verkoopprijs FROM Klantorder_producten kp
JOIN Product p ON p.product_id = kp.Product_product_id
ORDER BY aantal DESC
LIMIT 5';
								$counter = 0;
                    foreach ($conn->query($sql) as $row) {
                    	$counter++;

                        ?>
                        <tr role="row" class="odd">
        				  				<td class="" tabindex="0">
                                    <div class="m-card-user m-card-user--sm">
                                        <div class="m-card-user__pic">
                                            <div class="m-card-user__no-photo m--bg-fill-primary"><span><?= $counter; ?></span></div>
                                        </div>
                                        <div class="m-card-user__details">
                                            <span class="m-card-user__name"><?=$row['naam']?></span>
                                        </div>
                                    </div>
                            </td>
        				  									<td class=""><?=$row['korte_beschrijving']?></td>
        				  									<td class=""><?=$row['aantal']?></td>
        				  								  <td class=""><?=$row['verkoopprijs']?></td>

        				  									
        				  					</tr>
                        <?php
                    }


                ?>


                  </tbody>

					</table>


				</div></div>


		</div>



	</div>