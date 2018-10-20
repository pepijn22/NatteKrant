<!-- Check of het klant is -->
<?php
  if(isset($_GET['klantid'])){
    $klantid = $_GET['klantid'];
    ?>
    <div class="m-portlet__body">
    		<!--begin: Datatable -->
    		<div id="m_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

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
  
  if(!isset($_GET['klantid']) && !isset($_GET['orderid'])){
  ?>
  <div class="m-grid__item m-grid__item--fluid m-wrapper">
  <div class="m-content">
              <div class="row">
                <div class="col-md-12">

                  <!--begin::Portlet-->
                  <div class="m-portlet m-portlet--tab">
                    <div class="m-portlet__head">
                      <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                          <span class="m-portlet__head-icon m--hide">
                            <i class="la la-gear"></i>
                          </span>
                          <h3 class="m-portlet__head-text">
                            Order vastleggen
                          </h3>
                        </div>
                      </div>
                    </div>

                    <!--begin::Form-->
                    <form class="m-form m-form--fit m-form--label-align-right">
                      <div class="m-portlet__body">
                        
                        
                        <div class="form-group m-form__group">
                          <label for="exampleSelect1">Klanten</label>
                          <select class="form-control m-input" id="exampleSelect1">
                            <?php
                      $sql = 'SELECT * FROM klant';
                      foreach ($conn->query($sql) as $row) {
                        ?>
                         <option><?=$row['naam']?></option>
                         <?php
                      }
                            ?>
                          </select>

                        </div>
    
                        <div class="m-portlet__body">
                            <!--begin: Datatable -->
                            <div id="m_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                              

                            <div class="row">
                              <div class="col-sm-12">
                                 <label for="exampleSelect1">Producten</label>
                                <table class="table table-striped- table-bordered table-hover table-checkable dataTable no-footer dtr-inline" id="m_table_1" role="grid" aria-describedby="m_table_1_info" style="width: 1028px;">
                                    <thead>
                                            <tr role="row">
                                              <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" aria-label="Naam: activate to sort naam ascending">Naam</th>
                                              <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" aria-label="">Inkoopprijs</th>
                                              <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" aria-label="Company Agent: activate to sort column ascending">Verkoopprijs</th>
                                              <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" aria-label="Company Name: activate to sort column ascending">Aantal</th>
                                               <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" aria-label="Company Name: activate to sort column ascending">subtotaal</th>
                                             
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
                                       Product p
                                        JOIN
                                        Inkoop i
                                        ON i.Product_product_id = p.product_id
                                        GROUP BY inkoopprijs
                                        ORDER BY verschil DESC';
                                        $counter = 0;
                                            foreach ($conn->query($sql) as $row) {
                                              $counter++;

                                                ?>
                                                <tr role="row" class="odd">
                                                  <td class="" tabindex="0">
                                                            <div class="m-card-user m-card-user--sm">
                                                                <div class="m-card-user__pic"><label class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">
                              <input type="checkbox" value="" class="m-checkable">
                              <span></span>
                          </label>
                                                                </div>
                                                                <div class="m-card-user__details">
                                                                    <span class="m-card-user__name"><?=$row['naam']?></span>
                                                                </div>
                                                            </div>
                                                    </td>
                                                            <td class="">€ <?=$row['inkoopprijs']?></td>
                                                            <td class="">€ <?=$row['verkoopprijs']?></td>
                                                            <td class="" width="150px"> <div class="form-group m-form__group">
                  
                          <input type="email" class="form-control m-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" width="50">
                        </div></td>
                        <td class="">-</td> 

                                                            
                                                    </tr>
                                                <?php
                                            }


                                        ?>
                                        <tr role="row" class="odd">
                                                  <th class="" tabindex="0">
                                                          Korting
                                                    </th>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="">-</td> 

                                                            
                                                    </tr>


                                          </tbody>

                                  </table>


                                </div></div>


                            </div>



                          </div>


                       
                      </div>
                      <div class="m-portlet__foot m-portlet__foot--fit">
                        <div class="m-form__actions">
                          <button type="reset" class="btn btn-primary">Bewaar order</button>
                        </div>
                      </div>
                    </form>

                    <!--end::Form-->
                  </div>

                  <!--end::Portlet-->

                  <!--end::Portlet-->
                </div>
              </div>
            </div>

  </div>
  <?php
}
