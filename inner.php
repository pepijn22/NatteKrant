	<?php include_once "include/header.php" ?>
	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="m-page--wide m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">

			<!-- begin::Header -->
			<?php include_once "include/menu.php" ?>
			<!-- end::Header -->

			<!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver-desktop m-grid--desktop 	m-container m-container--responsive m-container--xxl m-page__container m-body">

				<!-- BEGIN: Left Aside -->
				<button class="m-aside-left-close m-aside-left-close--skin-light" id="m_aside_left_close_btn">
					<i class="la la-close"></i>
				</button>
				<div id="m_aside_left" class="m-grid__item m-aside-left ">

					<!-- BEGIN: Aside Menu -->
					<div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-light m-aside-menu--submenu-skin-light " data-menu-vertical="true" m-menu-scrollable="0" m-menu-dropdown-timeout="500">
						<ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
							<li class="m-menu__section m-menu__section--first">
								<h4 class="m-menu__section-text">Departments</h4>
								<i class="m-menu__section-icon flaticon-more-v2"></i>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
								<a href="javascript:;" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-bullet m-menu__link-bullet--dot">
										<span></span>
									</i>
									<span class="m-menu__link-text">Resources</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
								<div class="m-menu__submenu ">
									<span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true">
											<span class="m-menu__link">
												<span class="m-menu__link-text">Resources</span>
											</span>
										</li>
										<li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
											<a href="inner.html" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">Timesheet</span>
											</a>
										</li>
										<li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
											<a href="inner.html" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">Payroll</span>
											</a>
										</li>
										<li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
											<a href="inner.html" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">Contacts</span>
											</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
								<a href="inner.html" class="m-menu__link ">
									<i class="m-menu__link-bullet m-menu__link-bullet--dot">
										<span></span>
									</i>
									<span class="m-menu__link-text">Finance</span>
								</a>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover" m-menu-link-redirect="1">
								<a href="javascript:;" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-bullet m-menu__link-bullet--dot">
										<span></span>
									</i>
									<span class="m-menu__link-text">Support</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
								<div class="m-menu__submenu ">
									<span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" m-menu-link-redirect="1">
											<span class="m-menu__link">
												<span class="m-menu__link-text">Support</span>
											</span>
										</li>
										<li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
											<a href="inner.html" class="m-menu__link ">
												<span class="m-menu__link-text">Reports</span>
											</a>
										</li>
										<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover" m-menu-link-redirect="1">
											<a href="javascript:;" class="m-menu__link m-menu__toggle">
												<span class="m-menu__link-text">Cases</span>
												<i class="m-menu__ver-arrow la la-angle-right"></i>
											</a>
											<div class="m-menu__submenu ">
												<span class="m-menu__arrow"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
														<a href="inner.html" class="m-menu__link ">
															<span class="m-menu__link-text">Pending</span>
														</a>
													</li>
													<li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
														<a href="inner.html" class="m-menu__link ">
															<span class="m-menu__link-text">Urgent</span>
														</a>
													</li>
													<li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
														<a href="inner.html" class="m-menu__link ">
															<span class="m-menu__link-text">Done</span>
														</a>
													</li>
													<li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
														<a href="inner.html" class="m-menu__link ">
															<span class="m-menu__link-text">Archive</span>
														</a>
													</li>
												</ul>
											</div>
										</li>
										<li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
											<a href="inner.html" class="m-menu__link ">
												<span class="m-menu__link-text">Clients</span>
											</a>
										</li>
										<li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
											<a href="inner.html" class="m-menu__link ">
												<span class="m-menu__link-text">Audit</span>
											</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
								<a href="inner.html" class="m-menu__link ">
									<i class="m-menu__link-bullet m-menu__link-bullet--dot">
										<span></span>
									</i>
									<span class="m-menu__link-text">Administration</span>
								</a>
							</li>
							<li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
								<a href="inner.html" class="m-menu__link ">
									<i class="m-menu__link-bullet m-menu__link-bullet--dot">
										<span></span>
									</i>
									<span class="m-menu__link-text">Management</span>
								</a>
							</li>
							<li class="m-menu__section ">
								<h4 class="m-menu__section-text">Reports</h4>
								<i class="m-menu__section-icon flaticon-more-v2"></i>
							</li>
							<li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
								<a href="inner.html" class="m-menu__link ">
									<i class="m-menu__link-bullet m-menu__link-bullet--dot">
										<span></span>
									</i>
									<span class="m-menu__link-text">Accounting</span>
								</a>
							</li>
							<li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
								<a href="inner.html" class="m-menu__link ">
									<i class="m-menu__link-bullet m-menu__link-bullet--dot">
										<span></span>
									</i>
									<span class="m-menu__link-text">Products</span>
								</a>
							</li>
							<li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
								<a href="inner.html" class="m-menu__link ">
									<i class="m-menu__link-bullet m-menu__link-bullet--dot">
										<span></span>
									</i>
									<span class="m-menu__link-text">Sales</span>
								</a>
							</li>
							<li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
								<a href="inner.html" class="m-menu__link ">
									<i class="m-menu__link-bullet m-menu__link-bullet--dot">
										<span></span>
									</i>
									<span class="m-menu__link-text">IPO</span>
								</a>
							</li>
						</ul>
					</div>

					<!-- END: Aside Menu -->
				</div>

				<!-- END: Left Aside -->
				<div class="m-grid__item m-grid__item--fluid m-wrapper">

					<!-- BEGIN: Subheader -->
					<div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title m-subheader__title--separator">Dashboard</h3>
								<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
									<li class="m-nav__item m-nav__item--home">
										<a href="#" class="m-nav__link m-nav__link--icon">
											<i class="m-nav__link-icon la la-home"></i>
										</a>
									</li>
									<li class="m-nav__separator">-</li>
									<li class="m-nav__item">
										<a href="" class="m-nav__link">
											<span class="m-nav__link-text">Actions</span>
										</a>
									</li>
									<li class="m-nav__separator">-</li>
									<li class="m-nav__item">
										<a href="" class="m-nav__link">
											<span class="m-nav__link-text">Generate Reports</span>
										</a>
									</li>
								</ul>
							</div>
							<div>
								<div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
									<a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--outline-2x m-btn--air m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
										<i class="la la-plus m--hide"></i>
										<i class="la la-ellipsis-h"></i>
									</a>
									<div class="m-dropdown__wrapper">
										<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
										<div class="m-dropdown__inner">
											<div class="m-dropdown__body">
												<div class="m-dropdown__content">
													<ul class="m-nav">
														<li class="m-nav__section m-nav__section--first m--hide">
															<span class="m-nav__section-text">Quick Actions</span>
														</li>
														<li class="m-nav__item">
															<a href="" class="m-nav__link">
																<i class="m-nav__link-icon flaticon-share"></i>
																<span class="m-nav__link-text">Activity</span>
															</a>
														</li>
														<li class="m-nav__item">
															<a href="" class="m-nav__link">
																<i class="m-nav__link-icon flaticon-chat-1"></i>
																<span class="m-nav__link-text">Messages</span>
															</a>
														</li>
														<li class="m-nav__item">
															<a href="" class="m-nav__link">
																<i class="m-nav__link-icon flaticon-info"></i>
																<span class="m-nav__link-text">FAQ</span>
															</a>
														</li>
														<li class="m-nav__item">
															<a href="" class="m-nav__link">
																<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																<span class="m-nav__link-text">Support</span>
															</a>
														</li>
														<li class="m-nav__separator m-nav__separator--fit">
														</li>
														<li class="m-nav__item">
															<a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Submit</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- END: Subheader -->
					<div class="m-content">
						Inner page content goes here </div>
					</div>

				<!--</div>-->
			</div>

			<!-- end::Body -->

			<?php include_once "include/footer.php" ?>