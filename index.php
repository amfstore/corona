<?php
$ind = file_get_contents('https://api.terhambar.com/negara/Indonesia');
$world = file_get_contents('https://api.terhambar.com/negara/World');

$data_world = json_decode($world, true);
$data_ind = json_decode($ind, true);


?>




<!doctype html>
<html lang="en" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

		<!-- META DATA -->
			<title>Coronavirus Global & Indonesia Live Data</title>
		 	 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
			  <meta name="yandex-verification" content="9d8feb20e4e8d265" />  
  			<meta name="description" content="Informasi data terbaru mengenai kasus Virus Corona di seluruh dunia. Data di website kawalcorona.com akan selalu di update secara otomatis dan berasal dari Johns Hopkins University">
  			<meta name="keywords" content="Data Corona, Informasi Data Corona">


		<!-- BOOTSTRAP CSS -->
		<link href="data/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

		<!-- STYLE CSS -->
		<link href="data/css/newstyle.css" rel="stylesheet"/>
		<link href="data/css/skin-modes.css" rel="stylesheet"/>

		<!--HORIZONTAL CSS-->
		<link href="data/plugins/horizontal-menu/horizontal-menu.css" rel="stylesheet" />

		<!--C3.JS CHARTS CSS -->
		<link href="data/plugins/charts-c3/c3-chart.css" rel="stylesheet"/>

		<!--MORRIS CSS -->
		<link href="data/plugins/morris/morris.css" rel="stylesheet"/>

		<!-- CUSTOM SCROLL BAR CSS-->
		<link href="data/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet"/>

		<!--- FONT-ICONS CSS -->
		<link href="data/css/icons.css" rel="stylesheet"/>

		<!-- SIDEBAR CSS -->
		<link href="data/plugins/sidebar/sidebar.css" rel="stylesheet">

		<!-- COLOR SKIN CSS -->
		<link id="theme" rel="stylesheet" type="text/css" media="all" href="data/colors/color1.css" />
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-101162957-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-101162957-2');
</script>


	</head>

	<body>

		<!-- PAGE -->
		<div class="page">
			<div class="page-main">

				<!-- HEADER -->
				<nav class="navbar navbar-light bg-light shadow ">
				<div class="container">
				<a class="navbar-brand" href="#">Data Corona Indonesia</a>
				</div>
				</nav>
				<!-- End HEADER -->

                <!--app-content open-->
				<div class="container app-content">
					<div class="">

			<div class="jumbotron">
				<div class="container">
					<br><h1 class="display-3 text-center">Data Corona Indonesia</h1>
					<p class="lead m-0 text-center">Coronavirus Indonesia Live Data</p>
				</div>
			</div>
						<!-- PAGE-HEADER END -->

						<!-- ROW-1 OPEN -->
						<div class="row">
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card bg-danger img-card box-primary-shadow">
									<div class="card-body">
										<div class="d-flex">
											<div class="text-white">
												<p class="text-white mb-0">TOTAL POSITIF</p>
												<h2 class="mb-0 number-font"><?php echo $data_ind['total']?></h2>
												<p class="text-white mb-0">ORANG</p>
											</div>
											<div class="ml-auto"> <img src="uploads/sad-u6e.png" width="50" height="50" alt="Positif"> </div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card bg-success img-card box-secondary-shadow">
									<div class="card-body">
										<div class="d-flex">
											<div class="text-white">
												<p class="text-white mb-0">TOTAL SEMBUH</p>
												<h2 class="mb-0 number-font"><?php echo $data_ind['sembuh']?></h2>
												<p class="text-white mb-0">ORANG</p>
											</div>
											<div class="ml-auto"> <img src="uploads/happy-ipM.png" width="50" height="50" alt="Positif"> </div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card  bg-secondary img-card box-success-shadow">
									<div class="card-body">
										<div class="d-flex">
											<div class="text-white">
												<p class="text-white mb-0">TOTAL MENINGGAL</p>
												<h2 class="mb-0 number-font"><?php echo $data_ind['meninggal']?></h2>
												<p class="text-white mb-0">ORANG</p>
											</div>
											<div class="ml-auto"> <img src="uploads/emoji-LWx.png" width="50" height="50" alt="Positif"> </div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="container app-content">
					<div class="">

					<div class="jumbotron">
						<div class="container">
							<br><h1 class="display-3 text-center">Data Corona Global</h1>
							<p class="lead m-0 text-center">Coronavirus Global Live Data</p>
						</div>
					</div>
						<!-- PAGE-HEADER END -->

						<!-- ROW-1 OPEN -->
						<div class="row">
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card bg-danger img-card box-primary-shadow">
									<div class="card-body">
										<div class="d-flex">
											<div class="text-white">
												<p class="text-white mb-0">TOTAL POSITIF</p>
												<h2 class="mb-0 number-font"><?php echo $data_world['total']?></h2>
												<p class="text-white mb-0">ORANG</p>
											</div>
											<div class="ml-auto"> <img src="uploads/sad-u6e.png" width="50" height="50" alt="Positif"> </div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card bg-success img-card box-secondary-shadow">
									<div class="card-body">
										<div class="d-flex">
											<div class="text-white">
												<p class="text-white mb-0">TOTAL SEMBUH</p>
												<h2 class="mb-0 number-font"><?php echo $data_world['sembuh']?></h2>
												<p class="text-white mb-0">ORANG</p>
											</div>
											<div class="ml-auto"> <img src="uploads/happy-ipM.png" width="50" height="50" alt="Positif"> </div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card  bg-secondary img-card box-success-shadow">
									<div class="card-body">
										<div class="d-flex">
											<div class="text-white">
												<p class="text-white mb-0">TOTAL MENINGGAL</p>
												<h2 class="mb-0 number-font"><?php echo $data_world['meninggal']?></h2>
												<p class="text-white mb-0">ORANG</p>
											</div>
											<div class="ml-auto"> <img src="uploads/emoji-LWx.png" width="50" height="50" alt="Positif"> </div>
										</div>
									</div>
								</div>
								</div>
							</div><br><br><!-- COL END -->
							
						<marquee behavior="" direction=""><div class="col text-center fw-bold"><h2 class="mb-0 number-font">Terakhir Diperbarui <?php echo date('j F Y');?></h2></div></marquee>	
						</div><br><br><br>
						
	

			<!-- FOOTER -->
			<footer>
					<div class="row align-items-center">
						<div class="social">
							
						</div>
						<div class="col-lg-12 col-sm-12 mt-3 mt-lg-0 text-center">
						Made with by <a href="https://amfstore.github.io" class="">Ari Maulana Firmansyah</a>
						</div>
					</div>
				</div>
			</div>
		</div>
			</footer><br>
			<!-- FOOTER END -->
		</div>

		<!-- JQUERY JS -->
		<script src="data/js/jquery-3.4.1.min.js"></script>

		<!-- BOOTSTRAP JS -->
		<script src="data/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="data/plugins/bootstrap/js/popper.min.js"></script>

		<!-- SPARKLINE JS-->
		<script src="data/js/jquery.sparkline.min.js"></script>

		<!-- CHART-CIRCLE JS-->
		<script src="data/js/circle-progress.min.js"></script>

		<!-- RATING STAR JS -->
		<script src="data/plugins/rating/jquery.rating-stars.js"></script>

		<!-- CHARTJS CHART JS-->
		<script src="data/plugins/chart/Chart.bundle.js"></script>
		<script src="data/plugins/chart/utils.js"></script>

		<!-- C3.JS CHART JS -->
		<script src="data/plugins/charts-c3/d3.v5.min.js"></script>
		<script src="data/plugins/charts-c3/c3-chart.js"></script>

		<!-- INPUT MASK JS -->
		<script src="data/plugins/input-mask/jquery.mask.min.js"></script>

		<!-- CHARTJS CHART JS -->
		<script src="data/plugins/chart/Chart.bundle.js"></script>
		<script src="data/plugins/chart/utils.js"></script>

        <!-- CUSTOM SCROLLBAR JS -->
		<script src="data/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

		<!-- SIDE-MENU JS -->
		<script src="data/plugins/horizontal-menu/horizontal-menu.js"></script>

		<!-- PIETY CHART JS-->
		<script src="data/plugins/peitychart/jquery.peity.min.js"></script>
		<script src="data/plugins/peitychart/peitychart.init.js"></script>

		<!--MORRIS CHARTS JS -->
		<script src="data/plugins/morris/raphael-min.js"></script>
		<script src="data/plugins/morris/morris.js"></script>

		<!-- SIDEBAR JS -->
		<script src="data/plugins/sidebar/sidebar.js"></script>

		<!-- INDEX JS -->
        <script src="data/js/index54.js"></script>
		
		<!-- STICKY JS -->
		<script src="data/js/stiky.js"></script>

		<!--CUSTOM JS -->
		<script src="data/js/custom.js"></script>

	</body>

<!-- Mirrored from kawalcorona.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Mar 2021 12:59:02 GMT -->
</html>
