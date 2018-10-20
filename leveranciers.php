
<div class="m-portlet__body">
		<!--begin: Datatable -->
		<div id="m_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

    <div class="row">
      <div class="col-sm-12">
        <table class="table table-striped- table-bordered table-hover table-checkable dataTable no-footer dtr-inline" id="m_table_1" role="grid" aria-describedby="m_table_1_info" style="width: 1028px;">
						<thead>
			  			<tr role="row">
                      <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" aria-label="Naam: activate to sort naam ascending">Naam</th>
                      <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" aria-label="">Email</th>
                      <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" aria-label="Company Agent: activate to sort column ascending">Telefoonnummer</th>
                      <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" aria-label="Company Name: activate to sort column ascending">Adres</th>
                      <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Plaats</th>
                      <th>Inkooptotaal</th>
                      <th class="sorting_disabled" rowspan="1" colspan="1" style="" aria-label="Actions"></th>
                    </tr>
						</thead>
								<tbody>
                <?php

                    $sql = 'SELECT *, leverancier_id, inkoopprijs * aantal as inkooptotaal FROM leverancier as l
                    left JOIN inkoop as i ON
                    l.leverancier_id = i.Leverancier_leverancier_id';

                    foreach ($conn->query($sql) as $row) {
                        ?>
                        <tr role="row" class="odd">
        				  				<td class="" tabindex="0">
                                    <div class="m-card-user m-card-user--sm">
                                        <div class="m-card-user__pic">
                                            <div class="m-card-user__no-photo m--bg-fill-primary"><span><?= substr($row['naam'], 0 , 2); ?></span></div>
                                        </div>
                                        <div class="m-card-user__details">
                                            <span class="m-card-user__name"><?=$row['naam']?></span>
                                        </div>
                                    </div>
                            </td>
        				  									<td class=""><a class="m-link" href="mailto:<?=$row['email']?>"><?=$row['email']?></a></td>
        				  									<td class=""><?=$row['telefoonnummer']?></td>
        				  									<td class=""><?=$row['straatnaam'].' '.$row['huisnummer'].' '.$row['postcode']?></td>
        				  								  <td class=""><?=$row['plaats']?></td>

                                <td>
                                    &euro;<?= $row['inkooptotaal'] ?>
                                 </td>


        				  									<td>
                                <span class="dropdown">
                                    <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown" aria-expanded="true">
                                      <i class="la la-ellipsis-h"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="?page=orders&klantid=<?=$row['klant_id']?>"><i class="la la-edit"></i> Bekijk Orders</a>
                                    </div>
                                </span>
                              </td>
                              
        				  	</tr>
                        <?php
                    }


                ?>


                  </tbody>

					</table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="m_table_1_info" role="status" aria-live="polite"></div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="m_table_1_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="m_table_1_previous"><a href="#" aria-controls="m_table_1" data-dt-idx="0" tabindex="0" class="page-link"><i class="la la-angle-left"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="m_table_1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="m_table_1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="m_table_1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="m_table_1" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="m_table_1" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item next" id="m_table_1_next"><a href="#" aria-controls="m_table_1" data-dt-idx="6" tabindex="0" class="page-link"><i class="la la-angle-right"></i></a></li></ul></div></div></div></div>
	</div>

