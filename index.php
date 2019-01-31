<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="asset/css/stylesheet.css">
		<link rel="stylesheet" type="text/css" href="asset/css/ionic-icon.css">
				<link rel="stylesheet" type="text/css" href="asset/css/animate.css">


		<script type="text/javascript" src="asset/js/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="asset/js/bootstrap.js"></script>

			<link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto|Rubik:400,500,700" rel="stylesheet">

	<title>Street Vendor App</title>
</head>
<body>
	<div id="header">
		
		
		<div id="head">
			<div class="container-fluid">

				<div class="col-md-4">
					<img src="asset/img/streetvendor-logo.png" class="logo">
				</div>
				<div class="col-md-8">
					<div id="nav"> 
						<?php include('nav.php'); ?>
					</div>
				</div>
		</div>
		</div>

		<!--- BANNER -->
	<div id="banner">
	<div class="col-md-7 col-sm-8 animated bounceInLeft">
		<div class="container-fluid">
			<h1 >Comfort & Speed</h1>
			<p>Pay bills, get airtime, buy movie tickets and more <br /> 
with Street Vendor Mobile App.</p>
<p></p>
<button>Download <span class="ion-android-arrow-down"></span></button>
		</div>
	</div>
	<div class="col-md-5 col-sm-4 hidden-xs" style="padding-right: 0px">
		<img src="asset/img/streetvendor-app-mobile.png" width="100%" class="animated bounceInRight"> 
	</div>
	</div>

	</div>

	<div id="content-box" style="float: left">
		
			<div class="container">

			<center>Experience payments like never before</center>
			<p align="center" class="main-p">With easy to use Android, iOS and web apps from StreetVendor

</p>

		<div class="row">

			<div class="col-md-4" id="sel">
				<div class="l-box">
					<p align="center">
						<img src="asset/img/electricity.jpg" width="80px" style="margin-top: 13%">
						Electricity
					</p>
				</div>
				<p align="center" style="color:#ff9908; font-size: 20px">Instant Bill Payments</p>
				<p align="center">Pay your bills in a matter of seconds 
from the convenience of your phone.</p>
			</div>
			<div class="col-md-4" id="sel2">
				<div class="l-box" style="background: #225f9b; color:white">
					<p align="center" style="color:white">
						<img src="asset/img/wallet.jpg" width="60px" style="margin-top: 13%"> <br />
						Electricity <br /> <span style="font-size: 25px;">R200</span>
					</p>
				</div>
				<p align="center" style="color:#215c97; font-size: 20px">Easy Wallet Payments
</p>
				<p align="center">No need to take your card around. Deposit 
money and pay from StreetVendor wallet.</p>
			</div>
			<div class="col-md-4" id="sel3">
				<div class="l-box">
					<p align="center">
						<img src="asset/img/airtime.jpg" width="65px" style="margin-top: 13%"> <br />
						Airtime & Data
					</p>
				</div>
				<p align="center" style="color:#ff9908; font-size: 20px">Instant Bill Payments</p>
				<p align="center">With direct connections to all telcos 
in Nigeria, we provide fast airtime & data</p>
			</div>

		</div>

				</div>
		

	</div>

	<div id="content-box2">

		<div id="blue-content">
		<div class="container">
				<p align="right" style="margin-top: -50px;"><b> Supported Telcos: </b> <img src="asset/img/telcos.jpg" width="300px" style="margin-left: 2%"></p>
			<div class="col-md-4 hidden-sm hidden-xs" id="sel4">
				<img src="asset/img/download-mobile.png" width="100%" style="margin-top: -200px; ">
			</div>
			<div class="col-md-1 hidden-xs"></div>
			<div class="col-md-7">
				<p style="font-size: 70px;padding: 5% 5% 0% 5%">Download App</p>
				<p style="padding: 0% 5% 5% 5%">Join over one million users on one of Nigeria's highest rated apps on the Google Playstore. Use StreetVendor on Android, iOS or Mobile Web</p>
				<p style="padding: 0% 5% 5% 5%"><img src="asset/img/playstore.png"></p>
			</div>


		</div>
		</div>
	</div>

	<footer>
		<div class="container">
			<div class="col-md-5">
				<img src="asset/img/streetvendor-logo2.jpg" width="190px">
				<p>Nigeria's Fastest Growing Payment Solution</p>
			</div>
			<div class="col-md-7">
				<p align="right"><img src="asset/img/facebook.jpg"></p>
			</div>

		</div>
	</footer>

	<script type="text/javascript">
		$(document).ready(function(){

			$(window).scroll(function() {
    var height = $(window).scrollTop();



    if(height  > 330 ) {
		
		$('#sel').show().addClass("animated bounceInRight")
		$('#sel2').show().addClass("animated bounceInUp")
		$('#sel3').show().addClass("animated bounceInLeft")
    }

    if(height  >= 1030){
    	$('#sel4').show().addClass("animated bounceInLeft")
    }
});

		});

			</script>

</body>
</html>