<!DOCTYPE html>
<html>
<head>
	<title>Dress Me Fair</title>
	<meta charset="utf-8"/>
	<!-- 	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->

	<!-- BOOTSTRAP -->
	<link rel="stylesheet" href="css/bootstrap.css">	
	
	<!-- CSS Vendor -->
	<link rel="stylesheet" type="text/css" href="css/normalize.css" media="all" />
	<!-- CSS Perso -->
	<link rel="stylesheet" type="text/css" href="css/DMFstyle.css" media="screen" />
<script
  src="http://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>



	
</head>
<!-- BODY -->
<body>

										<!-- HEADER -->
	<header>
		<?php include('DMFHeader.php') ?>
	</header>
<div class="container">								<!-- MAIN -->
		<div class="us">
				<h1>Qui Sommes Nous?</h1>
				<article>
				Chez Dress Me Fair, nous avons vocation à proposer des produits répondants aux  chartes de labels  éthiques et équitables tout en gardant les tendances actuelles de la mode.
				Ethique car nous croyons au respect des droits de l’Homme sur son lieu de travail.
				tels que l’Interdiction du travail forcé et du travail des
				enfants, l’absence de discrimination raciale ou sexuelle, la liberté syndicale, ou encore les conditions
				d’hygiène et sécurité respectées.
				</article>
		</div>
		
		<div class="portfolio">
			<?php include('portfolio.php') ?>
		</div>
</div>
	<div class="container">
	<div class="row">	
		<div class="d-none d-lg-block PICus">
			<img src="img/UsPic.jpg" alt="Bureaux et Verdure">
		</div>
	</div>	
	</div>	


	<!--DIV CONTAINER-->
	

										<!--  FOOTER -->
</div>
<footer>
	<? include('DMFFooter.php') ?>
</footer>
<script src="js/bootstrap.js"></script>
</body>
</html>