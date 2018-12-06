<?php
// php file for header section
header('Content-Type: text/html; charset=UTF-8');

error_reporting(E_ALL);
ini_set('display_errors', 1);

?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="title" content="<?php echo $page_title; ?>">
	<meta name="description" content="<?php echo $page_description; ?>">
	<title><?php echo $page_title; ?></title>
	<link rel="apple-touch-icon" href="assets/favicons/apple-touch-icon.png" sizes="128x128">
	<link rel="icon" href="assets/favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" href="assets/favicons/favicon-16x16.png" sizes="16x16">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/magnific-popup.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/master.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/font-awesome.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/jn-video.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/jn-rotator.css" rel="stylesheet" type="text/css"/>
</head>
<body class="<?php echo $page_class; ?>">
	<div class="container">
		<div class="menu-mobile visible-xs visible-sm">
			<div class="navbar__logo visible-xs visible-sm">
				<a href="/">
					<img src="assets/images/logo.png" alt="Logo">
				</a>
			</div>
			<div class="close-menu visible-xs visible-sm">
				<span class="closebtn">X</span>
			</div>
			<nav class="main-menu-mobile visible-sm visible-xs">
				<ul class="nav menu">
					<li class="lang"><a class="item langes active" href="/">ES</a> <a class="separate">|</a> <a class="item langen" href="en">EN</a><</li>
					<li class="current active"><a class="item" href="index">Inicio</a></li>
					<li><a class="item" href="contact">Contacto</a></li>
					<li><a class="item btn-style-1 btn-subs open-popup-link" href="#modalSubs">Suscríbete</a></li>
				</ul>
			</nav>
		</div>
	</div>
	<header>
		<div id="header-1">
			<div class="container">
				<div class="top top_black nav_v2 animated slideInDown affix-top">
					<div class="container-fluid">
						<div class="navbar-header">
							<div class="navbar__logo">
								<a href="/">
									<img src="assets/images/logo.png" alt="Logo">
								</a>
							</div>
							<div class="hamburger navbar-toggle">
								<span class="line"></span>
								<span class="line"></span>
								<span class="line"></span>
							</div>
						</div>
						<nav class="main-menu navbar-collapse hidden-sm hidden-xs">
							<ul class="nav menu navbar-nav navbar-right">
								<li class="current active"><a class="item" href="index">Inicio</a></li>
								<li><a class="item" href="contact">Contacto</a></li>
								<li class="lies active"><a class="item langes" href="/">ES</a></li>
								<li class="sep"><a class="separate">|</a></li>
								<li class="lien"><a class="item langen" href="en">EN</a></li>
								<li><a class="item btn-style-1 btn-subs open-popup-link" href="#modalSubs">Suscríbete</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<?php if($page_class == 'page-home'): ?>
			<?php include 'includes/header-2-home.php'; ?>
		<?php endif; ?>
		<?php if($page_class == 'page-contact'): ?>
			<?php include 'includes/header-2-contact.php'; ?>
		<?php endif; ?>
	</header>

	<!-- Video Modal -->
	<div class="modal fade" id="modalVideo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<div class="jn-video">
						<video width="600" height="auto">
							<source src="assets/videos/video.mp4" type="video/mp4">
								<source src="assets/videos/video.ogg" type="video/ogg">
								</video>
								<div class="jn-video-play">
									<img src="assets/images/play.png" alt="Play">
								</div>
								<div class="jn-video-pause">
									<img src="assets/images/pause.png" alt="Pause">
								</div>
								<div class="progress jn-video-seekbar">
									<div class="progress-bar bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
										0%
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Subscription Modal -->
			<div id="modalSubs" class="mfp-hide mfp-with-anim">
				<h3 class="modal-title">Suscríbete</h3>
				<p>Creative Altar es la primera plataforma en línea con contenido de video para la Iglesia. Estamos aquí para ayudarte!</p>
				<form method="post" action="includes/newsletter.php">
					<div class="form-group">
						<label for="name">Nombre completo*</label>
						<div class="row">
							<div class="col-sm-6 left">
								<input type="text" class="form-control" id="name" name="name" placeholder="John">
							</div>
							<div class="col-sm-6 right">
								<input type="text" class="form-control" id="lastname" name="lastname" placeholder="Doe">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="address">Dirección de correo*</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="tucorreo@correo.com">
					</div>
					<div class="form-group">
						<label for="country">País*</label>
						<select class="country form-control" name="country" id="country">
							<option value="">Selecciona un país</option>
							<?php include 'includes/countries.php'; ?>
							<?php foreach ($countries as $key => $country): ?>
								<?php //$value = strtolower($country); ?>
								<option value="<?php echo $country; ?>"><?php echo $country; ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<div class="form-group">
						<label for="iglesia">Nombre de iglesia</label>
						<input type="text" class="form-control" id="iglesia" name="iglesia" placeholder="Iglesia del Carmen El Salvador">
					</div>
					<button type="submit" class="btn-style-1">Enviar</button>
				</form>
			</div>
