<!-- Check of het klant is -->
<?php
  if(isset($_GET['klantid'])){
    $klantid = $_GET['klantid'];
    ?>
    <div class="m-portlet__body">
    		<!--begin: Datatable -->
    		<div id="m_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <div class="dataTables_length" id="m_table_1_length">
                <label>Show <select name="m_table_1_length" aria-controls="m_table_1" class="custom-select custom-select-sm form-control form-control-sm">
                  <option value="10">10</option>
                  <option value="25">25</option>
                  <option value="50">50</option>
                  <option value="100">100</option>
                </select> entries
              </label>
            </div>
          </div>
          <div class="col-sm-12 col-md-6">
            <div id="m_table_1_filter" class="dataTables_filter">
              <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="m_table_1"></label>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-12">
            <table class="table table-striped- table-bordered table-hover table-checkable dataTable no-footer dtr-inline" id="m_table_1" role="grid" aria-describedby="m_table_1_info" style="width: 1028px;">
    						<thead>
    			  						<tr role="row">
                          <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" aria-label="Naam: activate to sort naam ascending">Ordernummer</th>
                          <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" aria-label="Company Email: activate to sort column ascending">Datum</th>
                          <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Status</th>
                          <th class="sorting_disabled" rowspan="1" colspan="1" style="" aria-label="Actions"></th>
                        </tr>
    						</thead>
    								<tbody>
                    <?php

                        $sql = 'SELECT k.naam,Klant_klant_id AS klantnummer,order_id AS ordernummer,status AS status, ko.datum AS datum, ko.order_id AS orderid FROM klantorder AS ko
                        LEFT JOIN klant k ON ko.Klant_klant_id = k.klant_id
                        WHERE Klant_klant_id = '.$klantid.'';
                        foreach ($conn->query($sql) as $row) {


                            ?>
                            <tr role="row" class="odd">
            				  				<td class="" tabindex="0">
                                        <div class="m-card-user m-card-user--sm">
                                            <div class="m-card-user__pic">
                                                <div class="m-card-user__no-photo m--bg-fill-primary"><span><?=$row['ordernummer']?></span></div>
                                            </div>
                                        </div>
                                </td>
            				  									<td class=""><?=$row['datum']?></td>

            				  									 <td class=""><?=$row['status']?></td>


                                        <td>
                                          <span class="dropdown">
                                              <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown" aria-expanded="true">
                                                <i class="la la-ellipsis-h"></i>
                                              </a>
                                              <div class="dropdown-menu dropdown-menu-right">
                                                  <a class="dropdown-item" href="?page=orders&orderid=<?=$row['orderid']?>"><i class="la la-edit"></i> Bekijk order</a>
                                              </div>
                                          </span>
                                        </td>
            				  					</tr>
                            <?php
                        }


                    ?>


                      </tbody>

    					</table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="m_table_1_info" role="status" aria-live="polite">Showing 1 to 10 of 50 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="m_table_1_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="m_table_1_previous"><a href="#" aria-controls="m_table_1" data-dt-idx="0" tabindex="0" class="page-link"><i class="la la-angle-left"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="m_table_1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="m_table_1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="m_table_1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="m_table_1" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="m_table_1" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item next" id="m_table_1_next"><a href="#" aria-controls="m_table_1" data-dt-idx="6" tabindex="0" class="page-link"><i class="la la-angle-right"></i></a></li></ul></div></div></div></div>
    	</div>

    <?php
  }

// Check of orderdetail pagina is
  if(isset($_GET['orderid'])){
    $orderid = $_GET['orderid'];
    ?>
    <div class="m-portlet__body">
    		<!--begin: Datatable -->
    		<div id="m_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <div class="dataTables_length" id="m_table_1_length">
                <label>Show <select name="m_table_1_length" aria-controls="m_table_1" class="custom-select custom-select-sm form-control form-control-sm">
                  <option value="10">10</option>
                  <option value="25">25</option>
                  <option value="50">50</option>
                  <option value="100">100</option>
                </select> entries
              </label>
            </div>
          </div>
          <div class="col-sm-12 col-md-6">
            <div id="m_table_1_filter" class="dataTables_filter">
              <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="m_table_1"></label>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-12">
            <table class="table table-striped- table-bordered table-hover table-checkable dataTable no-footer dtr-inline" id="m_table_1" role="grid" aria-describedby="m_table_1_info" style="width: 1028px;">
    						<thead>
    			  						<tr role="row">
                          <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" aria-label="Naam: activate to sort naam ascending">Ordernummer</th>
                          <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" aria-label="Company Email: activate to sort column ascending">Productnaam</th>
                          <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Aantal</th>
                          <th class="sorting_disabled" rowspan="1" colspan="1" style="" aria-label="Actions"></th>
                        </tr>
    						</thead>
    								<tbody>
                    <?php

                        $sql = 'SELECT * FROM klantorder_producten AS kp
                        LEFT JOIN product p ON kp.Product_product_id = p.product_id
                        WHERE kp.klantorder_order_id = '.$orderid.'';
                        foreach ($conn->query($sql) as $row) {


                            ?>
                            <tr role="row" class="odd">
            				  				<td class="" tabindex="0">
                                        <div class="m-card-user m-card-user--sm">
                                            <div class="m-card-user__pic">
                                                <div class="m-card-user__no-photo m--bg-fill-primary"><span><?=$orderid?></span></div>
                                            </div>
                                        </div>
                                </td>
            				  									<td class=""><?=$row['naam']?></td>

            				  									 <td class=""><?=$row['aantal']?></td>


                                        <td>
                                          <span class="dropdown">
                                              <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown" aria-expanded="true">
                                                <i class="la la-ellipsis-h"></i>
                                              </a>
                                              <div class="dropdown-menu dropdown-menu-right">
                                                  <a class="dropdown-item" href="?page=orders&orderid=<?=$row['orderid']?>"><i class="la la-edit"></i> Bekijk order</a>
                                              </div>
                                          </span>
                                        </td>
            				  					</tr>
                            <?php
                        }


                    ?>


                      </tbody>

    					</table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="m_table_1_info" role="status" aria-live="polite">Showing 1 to 10 of 50 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="m_table_1_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="m_table_1_previous"><a href="#" aria-controls="m_table_1" data-dt-idx="0" tabindex="0" class="page-link"><i class="la la-angle-left"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="m_table_1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="m_table_1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="m_table_1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="m_table_1" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="m_table_1" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item next" id="m_table_1_next"><a href="#" aria-controls="m_table_1" data-dt-idx="6" tabindex="0" class="page-link"><i class="la la-angle-right"></i></a></li></ul></div></div></div></div>
    	</div>

    <?php
  }
?>


<strong>Proces:</strong><br/>
<ul>
  <li>Verkoper – order vastleggen</li>
  <ul>
    <li>De klant moet gekozen worden uit een lijstje. Het lijstje moet sorteerbaar zijn en je moet kunnen zoeken.</li>
    <li>Als de klant gekozen is, kunnen bepaalde gegevens op het scherm al ingevuld worden.</li>
    <li>Per orderregel moet een medicijn gekozen worden.</li>
    <li>Als aantal van het medicijn is ingevuld, dan kan de totaalprijs voor die ene regel worden berekend en de totaalprijs van de order wordt bijgewerkt (exclusief én inclusief de korting)</li>
    <li>Als alles is ingevuld, wordt de order bewaard (Let op: jullie hoeven het SQL INSERT statement niet mee te nemen) </li>
  </ul>
</ul>