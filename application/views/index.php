<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
	<?php $this->load->view('_partials/head'); ?>
</head>

<body>

	<div class="preloader">
		<div class="lds-ripple">
			<div class="lds-pos"></div>
			<div class="lds-pos"></div>
		</div>
	</div>

	<div id="main-wrapper">
	
		<?php $this->load->view('_partials/top-bar');?>
	
		<?php $this->load->view('_partials/side-bar');?>

		<div class="page-wrapper">

			<?php $this->load->view('_partials/breadcrumb');?>

			<div class="container-fluid">
				<!-- Card -->

				<div class="row">
					<div class="col-md-6 col-lg-2 col-xlg-3">
						<div class="card card-hover">
							<div class="box bg-cyan text-center">
								<h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
								<h6 class="text-white">Home</h6>
							</div>
						</div>
					</div>
					<!-- Column -->
					<div class="col-md-6 col-lg-2 col-xlg-3">
						<div class="card card-hover">
							<div class="box bg-warning text-center">
								<h1 class="font-light text-white"><i class="mdi mdi-collage"></i></h1>
								<h6 class="text-white">Edit Profile</h6>
							</div>
						</div>
					</div>
					<!-- Column -->
					<div class="col-md-6 col-lg-2 col-xlg-3">
						<div class="card card-hover">
							<a href="">
								<div class="box bg-danger text-center">
									<h1 class="font-light text-white"><i class="mdi mdi-border-outside"></i></h1>
									<h6 class="text-white">Data Pegawai</h6>
								</div>
							</a>
						</div>
					</div>
					<!-- Column -->
					<div class="col-md-6 col-lg-2 col-xlg-3">
						<div class="card card-hover">
							<div class="box bg-info text-center">
								<h1 class="font-light text-white"><i class="mdi mdi-arrow-all"></i></h1>
								<h6 class="text-white">Laporan</h6>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-2 col-xlg-3">
						<div class="card card-hover">
							<div class="box bg-danger text-center">
								<h1 class="font-light text-white"><i class="mdi mdi-receipt"></i></h1>
								<h6 class="text-white">Forms</h6>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-2 col-xlg-3">
						<div class="card card-hover">
							<div class="box bg-info text-center">
								<h1 class="font-light text-white"><i class="mdi mdi-relative-scale"></i></h1>
								<h6 class="text-white">Log Out</h6>
							</div>
						</div>
					</div>
					
				</div>
				<!-- End Card -->
				
			</div>
			
			<?php $this->load->view('_partials/footer'); ?>
			
		</div>
	</div>
	<!-- End Wrapper -->
	
	<?php $this->load->view('_partials/scripts'); ?>

</body>

</html>