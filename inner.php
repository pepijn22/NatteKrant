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
					</div>
				</div>

				<!-- END: Subheader -->
				<div class="m-content">
					Inner page content goes here 
				</div>
			</div>

			<!--</div>-->
		</div>
		<!-- end::Body -->

		<?php include_once "include/footer.php" ?>