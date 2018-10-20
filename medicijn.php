<?php
if(isset($_GET['medicijn'])){
    $medicijn = $_GET['medicijn'];
}

$sql = "SELECT * FROM product where product_id = ".$medicijn;
foreach ($conn->query($sql) as $row) {

?>

    <strong>Naam: </strong><?= $row['naam'] ?> <br>
    <strong>Beschrijving: </strong><?= $row['lange_beschrijving'] ?> <br>

    <strong>Magazijnlocatie: </strong> <?= $row['Schap_schap_id'] ?> <br><br>

    <strong>Voorraad: </strong> <?= $row['voorraad'] ?> <br>
    <strong>Minimum voorraad: </strong> <?= $row['min_voorraad'] ?> <br><br>

    <strong>Moet bijbesteld worden: </strong> <?= ($row['voorraad'] < $row['min_voorraad']) ? 'Ja' : 'Nee' ?> <br><br><br>


    <strong>Leveranciers:</strong>

    <div class="row">
      <div class="col-sm-12">
        <table class="table table-striped- table-bordered table-hover table-checkable dataTable no-footer dtr-inline" id="m_table_1" role="grid" aria-describedby="m_table_1_info">
						<thead>
			  			<tr role="row">
                            <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" aria-label="Naam: activate to sort naam ascending">Leverancier</th>
                            <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" aria-label="">Telefoonnummer</th>
                            <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" aria-label="">E-mail</th>
                            <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" aria-label="">Adres</th>

                             <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" aria-label="">Inkoopprijs</th>


                    </tr>
						</thead>
								<tbody>
                <?php

                    $sql2 = "Select * from product as p

                    left join inkoop as i
                    on i.Product_product_id = product_id
                    
                    left join leverancier as l
                    on i.Leverancier_leverancier_id = l.leverancier_id
                    
                    WHERE product_id = ".$medicijn." ORDER BY inkoopprijs";

                    foreach ($conn->query($sql2) as $row) {
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
                                <?=$row['telefoonnummer']?>
                            </td>
                            <td>
                                <?=$row['email']?>
                            </td>
                            <td>
                                <?=$row['straatnaam']?>
                                <?=$row['huisnummer']?>
                                <?=$row['postcode']?>
                                <?=$row['plaats']?>
                            </td>
                            <td>
                                <?=$row['inkoopprijs']?>
                            </td>
        				  									
                              
        				  	</tr>
                        <?php
                    }


                ?>


                  </tbody>

					</table></div></div>


<?php } ?>

</div></div>
                    
                   </div></div></div>
	</div>