
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
                      <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" aria-label="Agent: activate to sort column ascending">Agent</th>
                      <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" aria-label="Company Email: activate to sort column ascending">Company Email</th>
                      <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" aria-label="Company Agent: activate to sort column ascending">Company Agent</th>
                      <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" aria-label="Company Name: activate to sort column ascending">Company Name</th>
                      <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Status</th>
                      <th class="sorting_desc" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" style="width: 32.25px;" aria-label="Type: activate to sort column ascending" aria-sort="descending">Type</th>
                      <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 69.5px;" aria-label="Actions">Actions</th>
                    </tr>
						</thead>
								<tbody>
                <?php

                    $sql = 'SELECT * FROM klant';
                    foreach ($conn->query($sql) as $row) {
                        print $row['naam'] . "\t";

                        ?>
                        <tr role="row" class="odd">
        				  				<td class="" tabindex="0">
                                    <div class="m-card-user m-card-user--sm">
                                        <div class="m-card-user__pic">
                                            <div class="m-card-user__no-photo m--bg-fill-primary"><span>S</span></div>
                                        </div>
                                        <div class="m-card-user__details">
                                            <span class="m-card-user__name">Sibyl Amy</span>
                                            <a href="" class="m-card-user__email m-link">Treutel-Ratke</a>
                                        </div>
                                    </div>
                            </td>
        				  									<td class=""><a class="m-link" href="mailto:samya@earthlink.net">samya@earthlink.net</a></td>
        				  									<td class="">Sibyl Amy</td>
        				  									<td class="">Treutel-Ratke</td>
        				  									<td class=""><span class="m-badge  m-badge--success m-badge--wide">Success</span></td>
        				  									<td class="sorting_1"><span class="m-badge m-badge--primary m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-primary">Retail</span></td>
        				  									<td nowrap="">
                                <span class="dropdown">
                                    <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown" aria-expanded="true">
                                      <i class="la la-ellipsis-h"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
                                        <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
                                        <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
                                    </div>
                                </span>
                                <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="View">
                                  <i class="la la-edit"></i>
                                </a>
                              </td>
        				  					</tr>
                        <?php
                    }


                ?>


                      <tr role="row" class="even">
				  									<td class="" tabindex="0">
                                <div class="m-card-user m-card-user--sm">
                                    <div class="m-card-user__pic">
                                        <img src="https://keenthemes.com/metronic/themes/themes/metronic/dist/preview/assets/app/media/img/users/100_10.jpg" class="m--img-rounded m--marginless" alt="photo">
                                    </div>
                                    <div class="m-card-user__details">
                                        <span class="m-card-user__name">Otis Jobbins</span>
                                        <a href="" class="m-card-user__email m-link">Ruecker, Leffler and Abshire</a>
                                    </div>
                                </div></td>
				  									<td class=""><a class="m-link" href="mailto:ojobbinsp@w3.org">ojobbinsp@w3.org</a></td>
				  									<td class="">Otis Jobbins</td>
				  									<td class="">Ruecker, Leffler and Abshire</td>
				  									<td class=""><span class="m-badge  m-badge--success m-badge--wide">Success</span></td>
				  									<td class="sorting_1"><span class="m-badge m-badge--primary m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-primary">Retail</span></td>
				  									<td nowrap="">
                        <span class="dropdown">
                            <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
                            </div>
                        </span>
                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="View">
                          <i class="la la-edit"></i>
                        </a></td>
				  						</tr><tr role="row" class="odd">
				  									<td class="" tabindex="0">
                                <div class="m-card-user m-card-user--sm">
                                    <div class="m-card-user__pic">
                                        <div class="m-card-user__no-photo m--bg-fill-danger"><span>V</span></div>
                                    </div>
                                    <div class="m-card-user__details">
                                        <span class="m-card-user__name">Vernon Cosham</span>
                                        <a href="" class="m-card-user__email m-link">Kreiger-Nicolas</a>
                                    </div>
                                </div></td>
				  									<td class=""><a class="m-link" href="mailto:vcoshamt@simplemachines.org">vcoshamt@simplemachines.org</a></td>
				  									<td class="">Vernon Cosham</td>
				  									<td class="">Kreiger-Nicolas</td>
				  									<td class=""><span class="m-badge  m-badge--success m-badge--wide">Success</span></td>
				  									<td class="sorting_1"><span class="m-badge m-badge--primary m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-primary">Retail</span></td>
				  									<td nowrap="">
                        <span class="dropdown">
                            <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
                            </div>
                        </span>
                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="View">
                          <i class="la la-edit"></i>
                        </a></td>
				  						</tr><tr role="row" class="even">
				  									<td class="" tabindex="0">
                                <div class="m-card-user m-card-user--sm">
                                    <div class="m-card-user__pic">
                                        <img src="https://keenthemes.com/metronic/themes/themes/metronic/dist/preview/assets/app/media/img/users/100_9.jpg" class="m--img-rounded m--marginless" alt="photo">
                                    </div>
                                    <div class="m-card-user__details">
                                        <span class="m-card-user__name">Ashley Blick</span>
                                        <a href="" class="m-card-user__email m-link">Cummings-Goodwin</a>
                                    </div>
                                </div></td>
				  									<td class=""><a class="m-link" href="mailto:ablick18@pinterest.com">ablick18@pinterest.com</a></td>
				  									<td class="">Ashley Blick</td>
				  									<td class="">Cummings-Goodwin</td>
				  									<td class=""><span class="m-badge  m-badge--success m-badge--wide">Success</span></td>
				  									<td class="sorting_1"><span class="m-badge m-badge--primary m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-primary">Retail</span></td>
				  									<td nowrap="">
                        <span class="dropdown">
                            <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
                            </div>
                        </span>
                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="View">
                          <i class="la la-edit"></i>
                        </a></td>
				  						</tr><tr role="row" class="odd">
				  									<td class="" tabindex="0">
                                <div class="m-card-user m-card-user--sm">
                                    <div class="m-card-user__pic">
                                        <img src="https://keenthemes.com/metronic/themes/themes/metronic/dist/preview/assets/app/media/img/users/100_13.jpg" class="m--img-rounded m--marginless" alt="photo">
                                    </div>
                                    <div class="m-card-user__details">
                                        <span class="m-card-user__name">Michaelina Plenderleith</span>
                                        <a href="" class="m-card-user__email m-link">Legros-Gleichner</a>
                                    </div>
                                </div></td>
				  									<td class=""><a class="m-link" href="mailto:mplenderleithh@globo.com">mplenderleithh@globo.com</a></td>
				  									<td class="">Michaelina Plenderleith</td>
				  									<td class="">Legros-Gleichner</td>
				  									<td class=""><span class="m-badge m-badge--brand m-badge--wide">Pending</span></td>
				  									<td class="sorting_1"><span class="m-badge m-badge--primary m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-primary">Retail</span></td>
				  									<td nowrap="">
                        <span class="dropdown">
                            <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
                            </div>
                        </span>
                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="View">
                          <i class="la la-edit"></i>
                        </a></td>
				  						</tr><tr role="row" class="even">
				  									<td tabindex="0" class="">
                                <div class="m-card-user m-card-user--sm">
                                    <div class="m-card-user__pic">
                                        <img src="https://keenthemes.com/metronic/themes/themes/metronic/dist/preview/assets/app/media/img/users/100_10.jpg" class="m--img-rounded m--marginless" alt="photo">
                                    </div>
                                    <div class="m-card-user__details">
                                        <span class="m-card-user__name">Ula Luckin</span>
                                        <a href="" class="m-card-user__email m-link">Kulas, Cassin and Batz</a>
                                    </div>
                                </div></td>
				  									<td class=""><a class="m-link" href="mailto:uluckin2@state.gov">uluckin2@state.gov</a></td>
				  									<td class="">Ula Luckin</td>
				  									<td class="">Kulas, Cassin and Batz</td>
				  									<td class=""><span class="m-badge m-badge--brand m-badge--wide">Pending</span></td>
				  									<td class="sorting_1"><span class="m-badge m-badge--primary m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-primary">Retail</span></td>
				  									<td nowrap="">
                        <span class="dropdown">
                            <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
                            </div>
                        </span>
                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="View">
                          <i class="la la-edit"></i>
                        </a></td>
				  						</tr><tr role="row" class="odd">
				  									<td class="" tabindex="0">
                                <div class="m-card-user m-card-user--sm">
                                    <div class="m-card-user__pic">
                                        <img src="https://keenthemes.com/metronic/themes/themes/metronic/dist/preview/assets/app/media/img/users/100_14.jpg" class="m--img-rounded m--marginless" alt="photo">
                                    </div>
                                    <div class="m-card-user__details">
                                        <span class="m-card-user__name">Lombard Luthwood</span>
                                        <a href="" class="m-card-user__email m-link">Haag LLC</a>
                                    </div>
                                </div></td>
				  									<td class=""><a class="m-link" href="mailto:lluthwoodi@constantcontact.com">lluthwoodi@constantcontact.com</a></td>
				  									<td class="">Lombard Luthwood</td>
				  									<td class="">Haag LLC</td>
				  									<td class=""><span class="m-badge m-badge--brand m-badge--wide">Pending</span></td>
				  									<td class="sorting_1"><span class="m-badge m-badge--primary m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-primary">Retail</span></td>
				  									<td nowrap="">
                        <span class="dropdown">
                            <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
                            </div>
                        </span>
                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="View">
                          <i class="la la-edit"></i>
                        </a></td>
				  						</tr><tr role="row" class="even">
				  									<td class="" tabindex="0">
                                <div class="m-card-user m-card-user--sm">
                                    <div class="m-card-user__pic">
                                        <img src="https://keenthemes.com/metronic/themes/themes/metronic/dist/preview/assets/app/media/img/users/100_10.jpg" class="m--img-rounded m--marginless" alt="photo">
                                    </div>
                                    <div class="m-card-user__details">
                                        <span class="m-card-user__name">Christa Jacmar</span>
                                        <a href="" class="m-card-user__email m-link">Brakus-Hansen</a>
                                    </div>
                                </div></td>
				  									<td class=""><a class="m-link" href="mailto:cjacmare@google.pl">cjacmare@google.pl</a></td>
				  									<td class="">Christa Jacmar</td>
				  									<td class="">Brakus-Hansen</td>
				  									<td class=""><span class="m-badge m-badge--brand m-badge--wide">Pending</span></td>
				  									<td class="sorting_1"><span class="m-badge m-badge--primary m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-primary">Retail</span></td>
				  									<td nowrap="">
                        <span class="dropdown">
                            <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
                            </div>
                        </span>
                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="View">
                          <i class="la la-edit"></i>
                        </a></td>
				  						</tr><tr role="row" class="odd">
				  									<td class="" tabindex="0">
                                <div class="m-card-user m-card-user--sm">
                                    <div class="m-card-user__pic">
                                        <div class="m-card-user__no-photo m--bg-fill-primary"><span>K</span></div>
                                    </div>
                                    <div class="m-card-user__details">
                                        <span class="m-card-user__name">Kessiah Chettoe</span>
                                        <a href="" class="m-card-user__email m-link">Mraz LLC</a>
                                    </div>
                                </div></td>
				  									<td class=""><a class="m-link" href="mailto:kchettoe12@zdnet.com">kchettoe12@zdnet.com</a></td>
				  									<td class="">Kessiah Chettoe</td>
				  									<td class="">Mraz LLC</td>
				  									<td class=""><span class="m-badge  m-badge--info m-badge--wide">Info</span></td>
				  									<td class="sorting_1"><span class="m-badge m-badge--primary m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-primary">Retail</span></td>
				  									<td nowrap="">
                        <span class="dropdown">
                            <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
                            </div>
                        </span>
                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="View">
                          <i class="la la-edit"></i>
                        </a></td>
				  						</tr><tr role="row" class="even">
				  									<td class="" tabindex="0">
                                <div class="m-card-user m-card-user--sm">
                                    <div class="m-card-user__pic">
                                        <img src="https://keenthemes.com/metronic/themes/themes/metronic/dist/preview/assets/app/media/img/users/100_11.jpg" class="m--img-rounded m--marginless" alt="photo">
                                    </div>
                                    <div class="m-card-user__details">
                                        <span class="m-card-user__name">Cherish Peplay</span>
                                        <a href="" class="m-card-user__email m-link">McCullough-Gibson</a>
                                    </div>
                                </div></td>
				  									<td class=""><a class="m-link" href="mailto:cpeplay16@typepad.com">cpeplay16@typepad.com</a></td>
				  									<td class="">Cherish Peplay</td>
				  									<td class="">McCullough-Gibson</td>
				  									<td class=""><span class="m-badge  m-badge--metal m-badge--wide">Delivered</span></td>
				  									<td class="sorting_1"><span class="m-badge m-badge--primary m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-primary">Retail</span></td>
				  									<td nowrap="">
                        <span class="dropdown">
                            <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
                            </div>
                        </span>
                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="View">
                          <i class="la la-edit"></i>
                        </a></td>
				  						</tr></tbody>

					</table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="m_table_1_info" role="status" aria-live="polite">Showing 1 to 10 of 50 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="m_table_1_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="m_table_1_previous"><a href="#" aria-controls="m_table_1" data-dt-idx="0" tabindex="0" class="page-link"><i class="la la-angle-left"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="m_table_1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="m_table_1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="m_table_1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="m_table_1" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="m_table_1" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item next" id="m_table_1_next"><a href="#" aria-controls="m_table_1" data-dt-idx="6" tabindex="0" class="page-link"><i class="la la-angle-right"></i></a></li></ul></div></div></div></div>
	</div>
