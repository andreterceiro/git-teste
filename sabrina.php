<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
	<head>
        <?php require_once("header.php"); ?>
  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->
		<?php require_once("header2.php"); ?>
	</head>
	<?php
		$mobile = false;
		if (strpos($_SERVER['HTTP_USER_AGENT'], 'obile') > -1 ) {
			$mobile=true;			
		}
		
		$firefox = false;
		if (strpos($_SERVER['HTTP_USER_AGENT'], 'irefox') > -1 ) {
			$firefox=true;			
		}
    ?>
	<body>
 		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<div id="fh5co-header">
			<header id="fh5co-header-section">
				<div class="container">
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
						<h1><a href="index.php"><img <?php if ($firefox) { echo 'style="margin-left: -500px "' ;} elseif(! $mobile) { echo 'style="margin-left: -800px "' ;} ?> src="images/logo2.png" /></a></h1>
						<!-- START #fh5co-menu-wrap -->
						<nav id="fh5co-menu-wrap" role="navigation">
							<?php require_once("menu.php"); ?>
						</nav>
					</div>
				</div>
			</header>		
		</div>
		<!-- end:fh5co-header -->
		<div class="fh5co-parallax" style="background-image: url(images/home-image-3.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
						<div class="fh5co-intro fh5co-table-cell animate-box">
							<h1 class="text-center">Sabrina</h1>
							<p>Um dos nossos principais projetos</p>
						</div>
					</div>
				</div>
			</div>
		</div><!-- end: fh5co-parallax -->
		<!-- end:fh5co-hero -->
		<div id="fh5co-contact">
			<div class="container">
					<div class="row">
						<div class="col-md-12 animate-box">
							<div class="row" style="font-family: Roboto, Arial, sans-serif !important">
								A Sabrina é um dos nossos principais projetos atualmente. Ela é uma exímia lutadora de Taekwondo, que irá para Coréia defender o Brasil. Tudo dando certo, ela irá para a próxima Olimpíada! Ela é filha do mestre Marcos Teis.
								Queremos falar sem meias palavras. As olimpíadas foram adiadas. O <a href="https://pt.wikipedia.org/wiki/Jogos_Ol%C3%ADmpicos_de_Ver%C3%A3o_de_2020" target="_blank">seguinte link</a> transmite: "Em 30 de março de 2020, foram definidas as novas datas: 23 de julho a 8 de agosto de 2021". O Covid-19 teve impacto em praticamente tudo no mundo. As Olimp&iacute;adas afetadas.
								Claro que deixar a academia impecável para os treinos e o bem estar dos nossos alunos é importante. Mas isto fazemos naturalmente. Digo, o mestre faz :)
								A Sabrina existe, não é um golpe. Abaixo algumas fotos dela:
							</div>
						</div>
					</div>
			</div>
		</div>
		<div class="slider">
			<ul>
				<li><img src="images/sabrina/sabrina2.jpg"/></li>
				<li><img src="images/sabrina/sabrina3.jpg"/></li>
				<li><img src="images/sabrina/sabrina4.jpg"/></li>				
				<li><img src="images/sabrina/sabrina5.jpg"/></li>
				<li><img src="images/sabrina/medalhas.jpg"/></li>
				<li><img src="images/sabrina/sabrina6.jpg"/></li>
				<!--<li><img src="images/sabrina/coreia1.jpg"/></li>-->
				<li><img src="images/sabrina/coreia2.jpg"/></li>
				<!--<li><img src="images/sabrina/tatame.jpg"/></li>-->
			</ul>
		</div>
		<iframe width="795" height="448" src="https://www.youtube.com/embed/HtkfUjqcylY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		
		<!-- END fh5co-contact -->
		<footer>
			<div class="row copy-right" style="background-color: #222831; border-top: 1px solid rgba(255, 255, 255, 0.1)">
				<div class="col-md-6 col-md-offset-3 text-center">
					<p class="fh5co-social-icons">
						<a href="https://www.facebook.com/teis.academia/"><i class="icon-facebook2"></i></a>
						<a href="https://www.instagram.com/teis.academia/"><i class="icon-instagram"></i></a>
						<!--<a href="#"><i class="icon-youtube"></i></a>-->
					</p>
					<p>Copyright 2016 Free Html5 <a href="#">'</a>. All Rights Reserved. <br>Made with <i class="icon-heart3"></i> by <a href="http://freehtml5.co/" target="_blank">Freehtml5.co</a> / Demo Images: <a href="https://unsplash.com/" target="_blank">Unsplash</a></p>
				</div>
			</div>
			<?php
		        require_once "footer.php";
			?>
		</footer>
	</div>
	<!-- END fh5co-page -->
	</div>
	<!-- END fh5co-wrapper -->
	<?php require_once("javascript.php"); ?>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-143754760-1"></script>

	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-143754760-1');
	</script>

	</body>
</html>
