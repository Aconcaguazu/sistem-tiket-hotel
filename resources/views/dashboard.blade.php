
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Masdim Hotel Luxury</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">

	<link rel="stylesheet" href="css/dashboard.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<div id="fh5co-header">
			<header id="fh5co-header-section">
				<div class="container">
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
						<h1 id="fh5co-logo"><a href="index.html">USER</a></h1>
						<!-- START #fh5co-menu-wrap -->
						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
								<li class=>
									<a href=" {{ route('dashboard') }}">Home</a>
								</li>
								<li>
									<a class="nav-link" href="{{ route('tamu.index') }}">
                                <div class="sb-nav-link-icon"><i class="fa fa-address-card"></i></div>
                                Daftar Tamu
                            </a>
								</li>
								<li>
							<a class="nav-link" href="{{ route('kamar.index') }}">
                                <div class="sb-nav-link-icon"><i class="fa fa-bed"></i></div>
                                Informasi Kamar
                            </a>
								</li>
								<li>
							<a class="nav-link" href="{{ route('checkin.index') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-calendar-check"></i></div>
                                Info Checkin
                            </a>
								</li>
								<li>
									<a class="nav-link" href="{{ route('checkout.index') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-calendar-times"></i></div>
                                Info Checkout
                            </a>
								</li>


						</nav>
					</div>
				</div>
			</header>
			
		</div>
		
		
		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(img/background.jpg);">
				<div class="desc animate-box">
					<h2>Welcome To Hotel Luxury</h2>
					<!-- <span>Lovely Crafted by <a href="http://frehtml5.co/" target="_blank" class="fh5co-site-name">FREEHTML5.co</a></span> -->
					<span><a class="btn btn-primary btn-lg" href="#">Booking Sekarang !</a></span>
				</div>
			</div>

		</div>


		<div class="fh5co-listing">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-4 fh5co-item-wrap">
						<a class="fh5co-listing-item">
							<img src="img/img-j.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co" class="img-responsive">
							<div class="fh5co-listing-copy">
								<h2>Jakarta</h2>
								<span class="icon">
									<i class="icon-chevron-right"></i>
								</span>
							</div>
						</a>
					</div>
					<div class="col-md-4 col-sm-4 fh5co-item-wrap">
						<a class="fh5co-listing-item">
							<img src="img/img-bo.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co" class="img-responsive">
							<div class="fh5co-listing-copy">
								<h2>Bogor</h2>
								<span class="icon">
									<i class="icon-chevron-right"></i>
								</span>
							</div>
						</a>
					</div>
					<div class="col-md-4 col-sm-4 fh5co-item-wrap">
						<a class="fh5co-listing-item">
							<img src="img/img-ba.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co" class="img-responsive">
							<div class="fh5co-listing-copy">
								<h2>Bandung</h2>
								<span class="icon">
									<i class="icon-chevron-right"></i>
								</span>
							</div>
						</a>
					</div>
					<!-- END 3 row -->

					<div class="col-md-4 col-sm-4 fh5co-item-wrap">
						<a class="fh5co-listing-item">
							<img src="img/img-d.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co" class="img-responsive">
							<div class="fh5co-listing-copy">
								<h2>Dieng</h2>
								<span class="icon">
									<i class="icon-chevron-right"></i>
								</span>
							</div>
						</a>
					</div>
					<div class="col-md-4 col-sm-4 fh5co-item-wrap">
						<a class="fh5co-listing-item">
							<img src="img/img-m.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co" class="img-responsive">
							<div class="fh5co-listing-copy">
								<h2>Malang</h2>
								<span class="icon">
									<i class="icon-chevron-right"></i>
								</span>
							</div>
						</a>
					</div>
					<div class="col-md-4 col-sm-4 fh5co-item-wrap">
						<a class="fh5co-listing-item">
							<img src="img/img-b.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co" class="img-responsive">
							<div class="fh5co-listing-copy">
								<h2>Bali</h2>
								<span class="icon">
									<i class="icon-chevron-right"></i>
								</span>
							</div>
						</a>
					</div>
					<!-- END 3 row -->

					<!-- Charts Js -->
					<div class="fh6co-chart">
					<div id="chartNilai">
						<canvas id="myChart">
						<!-- Chart-->
						<script src="https://code.highcharts.com/highcharts.js"></script>
						<script>
							Highcharts.chart('chartNilai', {
						chart: {
							type: 'column'
						},
						title: {
							text: 'Jumlah Pemesanan Hotel'
						},
						subtitle: {
							text: 'Source: MasdimGanteng.com'
						},
						xAxis: {
							categories: [
								'Suite Room',
								'Romance Room',
								'VIP Room'
							],
							crosshair: true
						},
						yAxis: {
							min: 0,
							title: {
								text: 'Kamar'
							}
						},
						tooltip: {
							headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
							pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
								'<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
							footerFormat: '</table>',
							shared: true,
							useHTML: true
						},
						plotOptions: {
							column: {
								pointPadding: 0.2,
								borderWidth: 0
							}
						},
						series: [{
							name: 'Nama Kamar',
							data: [83.6, 78.8, 80.5]
					
						}]
					});
						</script>
					</div>
					</div>
					

	<!-- jQuery -->

	

	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>

	<!-- Main JS -->
	<script src="js/main.js"></script>

	</body>
</html>

