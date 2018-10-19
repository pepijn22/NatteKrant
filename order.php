<?php
if(isset($_GET['orderid'])){
    $orderid = $_GET['orderid'];
}
?>



<strong>Ordernummer: <?= $orderid ?> </strong>
<div class="m-portlet__body">
		<!--begin: Datatable -->
		<div id="m_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">


    <div class="row">
      <div class="col-sm-12">
        <table class="table table-striped- table-bordered table-hover table-checkable dataTable no-footer dtr-inline" id="m_table_1" role="grid" aria-describedby="m_table_1_info" style="width: 1028px;">
						<thead>
			  			<tr role="row">
                      <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" aria-label="Naam: activate to sort naam ascending">Product</th>
                      <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" aria-label="">Aantal</th>
                    </tr>
						</thead>
								<tbody>
                <?php

                    $sql = "Select * from klantorder_producten as kp

                    left join product as p 
                    on kp.Product_product_id = p.product_id
                    
                    where Klantorder_order_id = ".$orderid;

                    foreach ($conn->query($sql) as $row) {
                        ?>
                        <tr role="row" class="odd">
        				  	<td class="" tabindex="0">
                                    <div class="m-card-user m-card-user--sm">
                                        <div class="m-card-user__details">
                                            <span class="m-card-user__name"><?=$row['naam']?></span>
                                        </div>
                                    </div>
                            </td>
                            <td>
                                <?=$row['aantal']?>
                            </td>
        				  									
                              
        				  	</tr>
                        <?php
                    }


                ?>


                  </tbody>

					</table></div></div>
                    
                   </div></div></div>
	</div>