<?php
// index.php file
// get some variables
$page_class = 'page-home';
$page_title = 'Creative Altar';
$page_description = 'Creative Altar Landing Page';

require 'includes/header.php';

?>

<section id="section-before-header">
	<div class="container">
		<div class="before-header block jn-rotator visible-xs" data-interval="5">
			<img class="jn-holder jn-holder-block jn-rotator-item" data-ratio="wide" src="assets/images/camera.jpg" alt="Camera">
			<img class="jn-holder jn-holder-block jn-rotator-item" data-ratio="wide" src="assets/images/img_ca_person.jpg" alt="img_ca_person">
			<img class="jn-holder jn-holder-block jn-rotator-item" data-ratio="wide" src="assets/images/img_ca_shot.jpg" alt="img_ca_shot">
			<div class="blur"></div>
		</div>
		<div class="before-header block hidden-xs">
			<div class="row">
				<div class="col-sm-4">
					<div class="img-container">
						<img class="jn-holder jn-holder-block" data-ratio="wide" src="assets/images/camera.jpg" alt="Camera">
					</div>
				</div>
				<div class="col-sm-4">
					<div class="img-container">
						<img class="jn-holder jn-holder-block" data-ratio="wide" src="assets/images/img_ca_person.jpg" alt="img_ca_person">
					</div>
				</div>
				<div class="col-sm-4">
					<div class="img-container">
						<img class="jn-holder jn-holder-block" data-ratio="wide" src="assets/images/img_ca_shot.jpg" alt="img_ca_shot">
					</div>
				</div>
			</div>
			<div class="blur"></div>
		</div>
	</div>
</section>
<section id="section-content-1">
	<div class="container">
		<div class="content-1 block">
			<div class="row">
				<div class="col-sm-5">
					<h3 class="section-tilte">Un Nuevo<br>Concepto</h3>
				</div>
				<div class="col-sm-7">
					<h4>¿Te cuesta encontrar videos y materiales creativos para tu Iglesia?</h4>
					<p>La inglesia está cambiando, y mientras que el mensaje del evangelio nunca cambia, los métodos de presentación y recursos para ilustrarlos si. Nosotros creemos que cada iglesia merece acceso a contenido profesional que conecta con su audiencia y glorifica a Dios. Creative Altar es la principal plataforma en línea con contenido de video para la inglesia. ¡Estamos aquí para ayudarte!</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="section-content-2">
	<div class="container">
		<div class="content-2 block">
			<div class="steps-container">
				<div class="row">
					<div class="col-sm-4">
						<div class="img-container">
							<img src="assets/images/icn_step1.png" alt="Step 1">
						</div>
						<h3 class="section-title">Paso 1</h3>
						<p>Busca videos en base a temporadas, temas populares o pasajs de la biblia</p>
					</div>
					<div class="col-sm-4">
						<div class="img-container">
							<img src="assets/images/icn_step2.png" alt="Step 2">
						</div>
						<h3 class="section-title">Paso 2</h3>
						<p>Mira una previsualización del video y compralo en el momento</p>
					</div>
					<div class="col-sm-4">
						<div class="img-container">
							<img src="assets/images/icn_step3.png" alt="Step 3">
						</div>
						<h3 class="section-title">Paso 3</h3>
						<p>Comparte con tu congregación una nueva experiencia</p>
					</div>
				</div>
			</div>
			<div class="subs-now hidden-xs">
				<h3 class="subtitle">Se parte de nuestra comunidad</h3>
				<a href="#modalSubs" class="btn-style-3 btn-subs open-popup-link">Suscríbete ahora</a>
			</div>
		</div>
	</div>
</div>
</section>
<section id="section-content-3">
	<div class="container">
		<div class="content-3 block hidden-xs">
			<div class="row">
				<div class="col-sm-5">
					<h3 class="section-tilte">¿Qué nos hace<br>diferentes?</h3>
				</div>
				<div class="col-sm-7">
					<p>Creative Altar es un grupo de Pastores, líderes, creativos, y personas que trabajan en inglesias. Sabemos lo dificil que es encontrar material relevante que conecte a las persona con Dios. Para eso hemos nacido y queremos proveer la mejor calidad y excelencia mientras juntos llevamos a más personas a Dios.</p>
				</div>
			</div>
		</div>
		<div class="content-3 block visible-xs">
			<div class="row">
				<div class="col-sm-5">
					<h3 class="section-tilte">¿Qué<br>nos hace<br>diferentes?</h3>
				</div>
				<div class="col-sm-7">
					<p>Creative Altar es un grupo de Pastores, líderes, creativos, y personas que trabajan en inglesias.</p>
					<p>Sabemos lo dificil que es encontrar material relevante que conecte a las persona con Dios. Para eso hemos nacido y queremos proveer la mejor calidad y excelencia mientras juntos llevamos a más personas a Dios.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<?php require 'includes/footer.php'; ?>
