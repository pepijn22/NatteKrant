  <?php include('conn.php');?>

  <?php include_once "include/header.php" ?>


	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="m-page--wide m-header--fixed m-header--fixed-mobile m-footer--push m-aside--offcanvas-default">

		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">

			<!-- begin::Header -->

			<?php include_once "include/menu.php" ?>

			<!-- end::Header -->

			<!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver-desktop m-grid--desktop 	m-container m-container--responsive m-container--xxl m-page__container m-body">
				<div class="m-grid__item m-grid__item--fluid m-wrapper">
         			<!-- BEGIN: Subheader -->
					<div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title ">Dashboard</h3>
							</div>
						</div>
					</div>

					<?php
						$header = 'Dashboard';
						if(isset($_GET['page'])){
							if($_GET['page'] == 'klanten'){
							  include ("klanten.php");
							  $header = 'Klanten';
							}
						} else {
							include("dashboard.php");
							$header = 'dashboard';
          				}
          			?>
      	</div>		
	</div>

	<!-- end::Body -->
	<?php include_once "include/footer.php" ?>
