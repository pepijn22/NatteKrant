<div class="m-portlet__body">
		<!--begin: Datatable -->
		<div id="m_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">


    <div class="row">
      <div class="col-sm-12">
        <table class="table table-striped- table-bordered table-hover table-checkable dataTable no-footer dtr-inline" id="m_table_1" role="grid" aria-describedby="m_table_1_info" style="width: 1028px;">
						<thead>
			  			<tr role="row">
                      <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" aria-label="Naam: activate to sort naam ascending">Product</th>
                      <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" aria-label="">Voorraad</th>
                      <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" aria-label="">Min.voorraad</th>
                    </tr>
						</thead>
								<tbody>
                <?php

                    $sql = "Select * from product

                    order by (voorraad < min_voorraad)";

                    foreach ($conn->query($sql) as $row) {
                        ?>
                        <tr role="row" class="odd <?= ($row['voorraad'] < $row['min_voorraad']) ? 'in-stock': 'not-in-stock'; ?>">
        				  	<td class="" tabindex="0">
                                    <div class="m-card-user m-card-user--sm">
                                        <div class="m-card-user__details">
                                            <span class="m-card-user__name"><?=$row['naam']?></span>
                                        </div>
                                    </div>
                            </td>

                            <td>
                                <?= $row['voorraad']?>
                            </td>

                            <td>
                                <?= $row['min_voorraad'] ?>
                            </td>

                            <td>
                                <span class="dropdown">
                                    <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown" aria-expanded="true">
                                      <i class="la la-ellipsis-h"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="?page=medicijn&medicijn=<?=$row['product_id']?>"><i class="la la-edit"></i> Bekijk gegevens</a>
                                    </div>
                                </span>
                              </td>
        				  									
                              
        				  	</tr>
                        <?php
                    }


                ?>


                  </tbody>

					</table></div></div>
                    
                   </div></div></div>
	</div>