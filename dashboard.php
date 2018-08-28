<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta name="author" content="zM4xi">
		<meta name="keyword" content="minecraft theme, zm4xi">
		<meta name="description" content="Welcome to Ender. We <3 Minecraft and our community.">
		<title>Ender</title>
		<link rel="stylesheet" href="ionicons/css/ionicons.min.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="sweetalert/dist/sweetalert.css">
		<link rel="stylesheet" href="css/purple.css">
		<link rel="icon" type="image/png" href="https://ender.site/img/Logo.png">

	</head>
	<body>
		<!-- navigation bar start -->
		<style>img[alt="www.000webhost.com"]{display:none;}</style>
		<nav class="navbar navbar-expand-lg main-navbar">
			<div class="container-fluid">
			  <a class="navbar-brand">
			  	<img src="https://xendercrafterx.000webhostapp.com/img/oof.png" alt="Logo">
			  </a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon">
			    	<i class="ion-navicon"></i>
			    </span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarNav">
				  <div class="mr-auto"></div>
			    <ul class="navbar-nav">
			      <li class="nav-item active">
							<!-- change '#dashboard' if you have a seperate dashboard page -->
			        <a class="nav-link smooth-link" href="#dashboard">dashboard</a>
			      </li>
			      <li class="nav-item">
							<!-- change '#features' if you have a seperate features page -->
			        <a class="nav-link smooth-link" href="#news">news</a>
			      </li>
			      <li class="nav-item">
							<!-- change '#games' if you have a seperate games page -->
			        <a class="nav-link smooth-link" href="#projects">projects</a>
			      </li>
			      <li class="nav-item">
							<!-- change '#games' if you have a seperate games page -->
			        <a class="nav-link smooth-link" href="/bot">ender bot</a>
			      </li>
			    </ul>
			    <form class="form-inline">
						<!-- change '#contact' if you have a seperate contact page -->
				    <a href="#contact" class="btn smooth-link align-middle btn-primary">contact</a>
			    </form>
			  </div>
		  </div>
		</nav>
		<!-- navigation bar end -->

		<!-- top background image start -->
		<section class="hero bg-overlay" id="dashboard" data-bg="/img/bg.png">
		<!-- top background image end -->

		<!-- main text over background image start -->
			<div class="text">
				<p class="lead">Welcome to Ender</p>
				<h1>We <i class="ion-ios-heart" style="color: #cc0000"></i><span class="bold"> Minecraft</span> and our<span class="bold"> Community</span>.</h1><br />
				<!-- onlineplayers display start -->
				<?php
					include ('server/mcapi/mcapi.php');
					$mcapi = mcapi("51.254.31.252", "25641");
					if($mcapi != false) {
						$playersMax    = $mcapi["players"]["max"];
						$playersOnline = $mcapi["players"]["online"];
						$favicon       = $mcapi["favicon"];
						#For more examples look at /server/mcapi/mcapi-example.php

						echo "<p class=\"lead\">Online: $playersOnline of $playersMax</p> <br />";
					}
				?>
				<img src="https://xendercrafterx.000webhostapp.com/img/oof.png">
				<!-- onlineplayers display end -->
				<div class="cta">
					<!-- Change '#features' if you want this button to link something else -->
					<a href="#news" class="btn btn-primary smooth-link">That's us</a>
				</div>
			</div>
		<!-- main text over background image end -->
		</section>
		
		<section class="padding bg-grey" id="news">
		<div class="container">
			<h2 class="section-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">News</font></font></h2>
			<div class="d-flex justify-content-center">
<blockquote class="twitter-tweet"><p lang="en" dir="ltr">hi. i&#39;m ender. you can check out my discord bot development progress at <a href="https://t.co/UiQri42p86">https://t.co/UiQri42p86</a></p>&mdash; Ender (@xEdnerCrafterx) <a href="https://twitter.com/xEdnerCrafterx/status/1024579439236145152?ref_src=twsrc%5Etfw">August 1, 2018</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
            <div class="text-right">
                <a href="https://ender.site/bot/ender.html" class="text-decoration-none text-ansoria font-weight-bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">More on this </font></font><i class="ion-ios-arrow-right"></i></a>
			</div>
			<hr>
			<div class="d-flex justify-content-center">
<blockquote class="twitter-tweet" data-lang="en"><p lang="en" dir="ltr">new website check it out <a href="https://t.co/p89SQbaDo0">https://t.co/p89SQbaDo0</a></p>&mdash; Ender (@xEdnerCrafterx) <a href="https://twitter.com/xEdnerCrafterx/status/1024271094063267841?ref_src=twsrc%5Etfw">July 31, 2018</a></blockquote>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>



            </div>
            <div class="text-right">
                <a href="#" class="text-decoration-none text-ansoria font-weight-bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">More on this </font></font><i class="ion-ios-arrow-right"></i></a>
			</div>
		</div>
		</section>

		<section class="padding" id="projects">
			<!-- Copy&Paste from HERE to (1) -->
			<div class="container">
				<h2 class="section-title">My Projects</h2>
				<div class="section-body">
					<!-- Copy&Paste from HERE to (2) -->
					<div class="row col-spacing">
						<!-- Copy&Paste from HERE to (3) -->
						<div class="col-12 col-md-6 col-lg-4">
							<article class="card">
							  <img class="card-img-top" src="https://ender.site/img/enderbot-picture.png" alt="Article Image">
							  <div class="card-body">
								  <div class="card-subtitle mb-2 text-muted">by Ender</div>
							    <h4 class="card-title"><a href="example-game.php">Ender Discord Bot</a></h4>
							    <p class="card-text">Just a small project I started as I was bored. It has all kind of commands and cool features. More news underway!</p>
							    <div class="text-right">
								    <a href="example-game.php" class="card-more">Read More <i class="ion-ios-arrow-right"></i></a>
							    </div>
						    </div>
						  </article>
					  </div>
						<!-- HERE to create a new preview card (3) -->
					  <div class="col-12 col-md-6 col-lg-4">
							<article class="card">
							  <img class="card-img-top" src="img/unknown.png" alt="Article Image">
							  <div class="card-body">
							    <h4 class="card-title"><a href="example-game.php">Coming Soon</a></h4>
							    <div class="text-right">
								    <a href="#" class="card-more">Read More <i class="ion-ios-arrow-right"></i></a>
							    </div>
						    </div>
						  </article>
						</div>
						<div class="col-12 col-md-6 col-lg-4">
							<article class="card">
							  <img class="card-img-top" src="img/unknown.png" alt="Article Image">
							  <div class="card-body">
							    <h4 class="card-title"><a href="example-game.php">Coming Soon</a></h4>
							    <div class="text-right">
								    <a href="#" class="card-more">Read More <i class="ion-ios-arrow-right"></i></a>
							    </div>
						    </div>
						  </article>
					  </div>
					</div>
					<!-- HERE to create a new row (2) -->
				</div>
			<!-- HERE will create a new area to add things (1) -->
		</section>
		
		<section class="padding bg-grey" id="contact">
			<div class="container">
				<h2 class="section-title text-center">Contact Us</h2>
				<p class="section-lead text-center text-muted">Send us your ideas, wishes and more. We will answer as soon as possible</p>
				<div class="section-body">
					<div class="row col-spacing">
						<div class="col-12 col-md-5">
							<ul class="contact-icon">
								<li><i class="ion ion-ios-email"></i> <div>ender@ender.site</div></li>
							</ul>
						</div>
				</div>
			</div>
		</div></section>

		<!-- footer start -->
		<footer>
			<div class="container">
				<figure>
					<img src="https://xendercrafterx.000webhostapp.com/new/img/oof.png" alt="Logo">
				</figure>
				<p>
					Copyright &copy; 2018 Ender
				</p>
				<p>
					Made with <i class="ion-heart"></i> By zM4xi
				</p>
			</div>
<a class="twitter-follow-button"
  href="https://twitter.com/xEdnerCrafterx"
  data-show-count="false">
Follow @xEdnerCrafterx</a>
		</footer>
		<!-- footer end -->
		<script src="js/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="js/jquery.easeScroll.js"></script>
		<script src="sweetalert/dist/sweetalert.min.js"></script>
		<script src="js/wtm.js"></script>
	</body>
</html>
