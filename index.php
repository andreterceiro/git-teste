<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<link rel="shortcut icon" href="favicon.ico" />
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
						<h1><a href="index.php"><img  <?php if ($firefox && !$mobile) { echo 'style="margin-left: -500px "' ;} elseif(! $mobile) { echo 'style="margin-left: -800px "' ;} ?> src="images/logo2.png" /></a></h1>
						<!-- START #fh5co-menu-wrap -->
						<nav id="fh5co-menu-wrap" role="navigation">
							<?php require_once("menu.php"); ?>
						</nav>
					</div>
				</div>
			</header>		
		</div>
		<!-- end:fh5co-header -->
		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(images/home-image.jpg);">
				<div class="desc animate-box">
					<div class="container">
						<div class="row">
							<div class="col-md-7">
								<h2>Voltaram as aulas! Taekwondo começou em 13/07! <br><br>A academia Teis é um ambiente familiar, onde treinamos artes marciais, com o objetivo de formar campeões na vida e nos esportes</h2>
								<marquee class="destaque">Novo horário de Taekwondo, sábado às 16:00. Sábado de manhã e os demais horários continuam. Sem cobrança adicional. Taekwondo kids às 18:30 (segundas, quartas e sextas-feiras)!</marquee>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end:fh5co-hero -->
		<div id="fh5co-schedule-section" class="fh5co-lightgray-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="heading-section text-center animate-box">
							<h2>Agenda</h2>
						</div>
					</div>
				</div>
				<div class="row animate-box">
					<div class="col-md-10 col-md-offset-1 text-center">
						<ul class="schedule">
							<li><a href="#" class="active" data-sched="monday">Segunda</a></li>
							<li><a href="#" data-sched="tuesday">Terça</a></li>
							<li><a href="#" data-sched="wednesday">Quarta</a></li>
							<li><a href="#" data-sched="thursday">Quinta</a></li>
							<li><a href="#" data-sched="friday">Sexta</a></li>
							<li><a href="#" data-sched="saturday">Sábado</a></li>
						</ul>
					</div>
					<div class="row text-center">
	
						<div class="col-md-12 schedule-container">

							<div class="schedule-content active" data-day="monday">
								<div class="col-md-12 col-sm-6">
									<div class="program program-schedule">
										<h3>Taekwondo e Futebol</h3>
										<span style="font-family: Roboto, Arial, sans-serif !important">Segunda é dia de Taekwondo (2 horários, 18:30 e 20:30) e Jiu Jitsu (19:30)</span>
									</div>
								</div>
							</div>	
							<div class="schedule-content" data-day="tuesday">	
								<div class="col-md-12 col-sm-6">
									<div class="program program-schedule">
							        	<h3>Muay Thai</h3>
							        	<span style="font-family: Roboto, Arial, sans-serif !important">Na terça temos Muay Thai às 20:30</span>
									</div>
								</div>
							</div>
							<div class="schedule-content" data-day="wednesday">
								<div class="col-md-12 col-sm-6">
									<div class="program program-schedule">
										<h3>Taekwondo e Futebol</h3>
										<span style="font-family: Roboto, Arial, sans-serif !important">Na quarta é novamente dia de Jiu Jitsu e Taekwondo, nos mesmos horáros de segunda</span>
									</div>
								</div>
							</div>
							<div class="schedule-content" data-day="thursday">
								<div class="col-md-12 col-sm-6">
									<div class="program program-schedule">
										<h3>Muay Thai</h3>
										<span style="font-family: Roboto, Arial, sans-serif !important">Na quinta temos novamente Muay Thai, no mesmo horaŕio de terça-feira</span>
									</div>
								</div>
							</div>
							<div class="schedule-content" data-day="friday">	
								<div class="col-md-12 col-sm-6">
									<div class="program program-schedule">
											<h3>Taekwondo e Futebol</h3>
										<span style="font-family: Roboto, Arial, sans-serif !important">Na sexta é novamente dia de Jiu Jitsu e Taekwondo, nos mesmos horáros de segunda</span>
									</div>
							    </div>		
							</div>
							<div class="schedule-content" data-day="saturday">	
								<div class="col-md-12 col-sm-6">
									<div class="program program-schedule">
										<h3>Taekwondo</h3>
										<span style="font-family: Roboto, Arial, sans-serif !important">No sábado temos um treino de Taekwondo das 10~10:30 até 12:00</span>
									</div>
								</div>
							</div>
							
							<!-- END sched-content -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="fh5co-parallax" style="background-image: url(images/home-image-3.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
						<div class="fh5co-intro fh5co-table-cell animate-box">
							<h1 class="text-center">Ritmo e resultado</h1>
							<p>Isso você quem decide. Ninguém falará para você fazer mais exercícios quando estiver cansado ou com sede. Você decide o ritmo, o que influenciará nos resultados.</p>
						</div>
					</div>
				</div>
			</div>
		</div><!-- end: fh5co-parallax -->

		<div id="fh5co-team-section" class="fh5co-lightgray-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="heading-section text-center animate-box">
							<h2>Conheça nossos treinadores</h2>
						</div>
					</div>
				</div>
				<div class="row text-center">
					<div class="col-md-4 col-sm-6">
						<div class="team-section-grid animate-box" style="background-image: url(images/marcos-teis.jpg);">
							<div class="overlay-section">
								<div class="desc">
									<h3>Marcos Teis</h3>
									<p>Marcos é mestre em Taekwondo (5 dan) e comanda uma divertidíssima aula de segunda feira</p>
									<p class="fh5co-social-icons">
										<a href="https://www.facebook.com/marcos.teis.7"><i class="icon-facebook-with-circle"></i></a>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="team-section-grid animate-box" style="background-image: url(images/anderson-teis.jpg);">
							<div class="overlay-section">
								<div class="desc">
									<h3>Anderson Teis</h3>
									<p>Anderson é um talentosíssimo professor de Taekwondo, além de praticante de outras artes marciais. É filho do Marcos Teis.</p>
									<p class="fh5co-social-icons">
										<a href="https://www.facebook.com/anderson.teis"><i class="icon-facebook-with-circle"></i></a>
										<a href="https://www.instagram.com/anderson_teis"><i class="icon-instagram-with-circle"></i></a>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="team-section-grid animate-box" style="background-image: url(images/guilhotina.jpg?a=1);">
							<div class="overlay-section">
								<div class="desc">
									<h3>Paulo Sanchez (Guilhotina)</h3>
									<p>O professor Guilhotina comanda nossa aula de Jiu-Jitsu, sempre no ritmo do aluno</p>
									<p class="fh5co-social-icons">
										<a href="https://www.facebook.com/paulo.sanchez120"><i class="icon-facebook-with-circle"></i></a>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="team-section-grid animate-box" style="background-image: url(images/marcelo1.jpg);">
							<div class="overlay-section">
								<div class="desc">
									<h3>Marcelo</h3>
									<p>O professor Marcelo comanda uma boa aula de Muay Thai. Ele, como os outros professores, sempre respeita o ritmo dos alunos. Nada de se machucar hein?</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="fh5co-pricing-section" class="fh5co-pricing fh5co-lightgray-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="heading-section text-center animate-box">
							<h2>Planos</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="pricing">
					<div class="col-md-7 animate-box">
						<div class="price-box animate-box">
							<h2 class="pricing-plan">1 modalidade</h2>
							<div class="price"><sup class="currency">$</sup>140,00<small>/mês</small></div>
							<p>Neste plano você escolhe 1 modalidade. Muay Thai por R$99,99 por mês. De R$840,00 por R$599,00 no plano semestral.</p>
						</div>
					</div>

					<div class="col-md-3 animate-box">
						<div class="price-box animate-box">
							<h2 class="pricing-plan">2 ou mais modalidades</h2>
							<div class="price"><sup class="currency">$</sup>??<small>/month</small></div>
							<p>Neste caso você, como outros alunos nossos, faz mais de 1 modalidade. Neste caso, converse com o mestre Marcos, que quando não está dando aula, está na recepção. Será visto o que pode ser feito em seu caso. </p>
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>
		
		<!-- fh5co-blog-section -->
		<footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-4 animate-box">
							<h3 class="section-title">Sobre nós</h3>
							<p>Na academia Teis gostamos de nos divertir e treinar. Vamos no seu ritmo. E buscamos os resultados que quer. Estamos próximos ao Shopping Anália Franco e à escola Kennedy, na Vila Formosa, zona leste de São Paulo.</p>
						</div>

						<div class="col-md-4 animate-box">
							<h3 class="section-title">Nosso endereço</h3>
							<ul class="contact-info">
								<li><i class="icon-map-marker"></i>Rua Arcurui, 512</li>
								<li><i class="icon-phone"></i>(11) 95142-6799, (11) 95175-0043 </li>	
								<li><i class="icon-envelope"></i><a href="#">marcos@teis.com.br</a></li>
							</ul>
						</div>
						
					</div>
					<div class="row copy-right">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="fh5co-social-icons">
								<a href="https://www.facebook.com/teis.academia/"><i class="icon-facebook2"></i></a>
								<a href="https://www.instagram.com/teis.academia/"><i class="icon-instagram"></i></a>
							</p>
							<p>Copyright 2016 Free Html5 <a href="#">'</a>. All Rights Reserved. <br>Made with <i class="icon-heart3"></i> by <a href="http://freehtml5.co/" target="_blank">Freehtml5.co</a> / Demo Images: <a href="https://unsplash.com/" target="_blank">Unsplash</a></p>
						</div>
					</div>
				</div>
			</div>
			<?php
		        require_once "footer.php";
			?>
		</footer>
	</div>
	<!-- END fh5co-page -->
	<!-- END fh5co-wrapper -->
	</div>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-143754760-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-143754760-1');
	</script>


	<?php REQUIRE_ONCE("javascript.php"); ?>
	</body>
</html>

    
