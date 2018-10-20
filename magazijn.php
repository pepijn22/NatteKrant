
<strong> Alle orders die nog ingepakt moeten worden</strong>
<div class="m-portlet__body">
		<!--begin: Datatable -->
		<div id="m_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
     

    <div class="row">
      <div class="col-sm-12">
        <table class="table table-striped- table-bordered table-hover table-checkable dataTable no-footer dtr-inline" id="m_table_1" role="grid" aria-describedby="m_table_1_info" style="width: 1028px;">
						<thead>
			  			<tr role="row">
                      <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" aria-label="Naam: activate to sort naam ascending">Klant</th>
                      <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" aria-label="">Email</th>
                      <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" aria-label="Company Agent: activate to sort column ascending">Telefonnummer</th>
                      <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" aria-label="Company Name: activate to sort column ascending">Adres</th>
                      <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Plaats</th>
                     
                      <th class="sorting_disabled" rowspan="1" colspan="1" style="" aria-label="Actions"></th>
                    </tr>
						</thead>
								<tbody>
                <?php

                    $sql = "SELECT * from klantorder  as ko 

                    left join klant AS k ON k.klant_id = ko.Klant_klant_id
                    
                    where status = 'verzameld'";
                    $counter = 0;
                    foreach ($conn->query($sql) as $row) {
                        $counter++;
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
                                <span class="dropdown">
                                    <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown" aria-expanded="true">
                                      <i class="la la-ellipsis-h"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="?page=order&orderid=<?=$row['klant_id']?>"><i class="la la-edit"></i> Bekijk Order</a>
                                    </div>
                                </span>
                              </td>
                              
        				  	</tr>

                         
                        <?php
                    }


                ?>


                  </tbody>

					</table></div></div></div>
	</div>




<strong>Proces:</strong><br/>
magazijn: Pak orders in die verstuurd moeten worden (en waarvoor de robots de medicijnen via 1 of meer bakken aan het verzamelen zijn). 